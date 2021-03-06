<?php declare(strict_types=1);

namespace Shopware\Storefront\Test\Framework\Cache;

use PHPUnit\Framework\TestCase;
use Shopware\Core\Framework\Adapter\Cache\CacheTagCollection;
use Shopware\Core\Framework\Adapter\Cache\CacheTracer;
use Shopware\Core\Framework\Adapter\Translation\Translator;
use Shopware\Core\Framework\Test\TestCaseBase\IntegrationTestBehaviour;
use Shopware\Core\SalesChannelRequest;
use Shopware\Core\System\SystemConfig\SystemConfigService;
use Shopware\Storefront\Framework\Cache\CacheStateValidator;
use Shopware\Storefront\Framework\Cache\CacheStore;
use Shopware\Storefront\Framework\Cache\HttpCacheKeyGenerator;
use Shopware\Storefront\Framework\Routing\MaintenanceModeResolver;
use Symfony\Component\Cache\Adapter\ArrayAdapter;
use Symfony\Component\Cache\Adapter\TagAwareAdapter;
use Symfony\Component\Cache\CacheItem;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @internal
 * @group cache
 */
class CacheStoreTest extends TestCase
{
    use IntegrationTestBehaviour;

    private const IP = '127.0.0.1';

    /**
     * @dataProvider maintenanceRequest
     */
    public function testMaintenanceRequest(bool $active, array $whitelist, bool $shouldBeCached): void
    {
        $request = new Request();
        $request->attributes->set(SalesChannelRequest::ATTRIBUTE_SALES_CHANNEL_MAINTENANCE, $active);
        $request->attributes->set(SalesChannelRequest::ATTRIBUTE_SALES_CHANNEL_MAINTENANCE_IP_WHITLELIST, json_encode($whitelist));
        $request->server->set('REMOTE_ADDR', self::IP);
        static::assertSame(self::IP, $request->getClientIp());

        $item = new CacheItem();

        $count = $shouldBeCached ? 1 : 0;

        $cache = $this->createMock(TagAwareAdapter::class);
        $cache->expects(static::exactly($count))
            ->method('getItem')
            ->willReturn($item);

        // ensure empty request stack
        while ($this->getContainer()->get('request_stack')->pop()) {
        }

        $this->getContainer()->get('request_stack')->push($request);

        $store = new CacheStore(
            $cache,
            $this->getContainer()->get(CacheStateValidator::class),
            $this->getContainer()->get('event_dispatcher'),
            $this->getContainer()->get(CacheTracer::class),
            $this->getContainer()->get(HttpCacheKeyGenerator::class),
            $this->getContainer()->get(MaintenanceModeResolver::class),
            []
        );

        $store->lookup($request);
    }

    public function maintenanceRequest(): iterable
    {
        yield 'Always cache requests when maintenance is inactive' => [false, [], true];
        yield 'Always cache requests when maintenance is active' => [true, [], true];
        yield 'Do not cache requests of whitelisted ip' => [true, [self::IP], false];
        yield 'Cache requests if ip is not whitelisted' => [true, ['120.0.0.0'], true];
    }

    public function testSessionIsNotCached(): void
    {
        $store = new CacheStore(
            new TagAwareAdapter(new ArrayAdapter()),
            $this->getContainer()->get(CacheStateValidator::class),
            $this->getContainer()->get('event_dispatcher'),
            new CacheTracer($this->createMock(SystemConfigService::class), $this->createMock(Translator::class), new CacheTagCollection()),
            $this->getContainer()->get(HttpCacheKeyGenerator::class),
            $this->getContainer()->get(MaintenanceModeResolver::class),
            []
        );

        $request = new Request();
        $response = new Response();
        $response->setPublic();
        $response->headers->setCookie(new Cookie('session-', 'bla'));
        $response->headers->setCookie(new Cookie('bla', 'val'));

        $store->write($request, $response);

        $cachedResponse = $store->lookup($request);

        static::assertCount(1, $cachedResponse->headers->getCookies());
        $cookie = $cachedResponse->headers->getCookies()[0];

        static::assertSame('bla', $cookie->getName());
        static::assertSame('val', $cookie->getValue());
    }
}
