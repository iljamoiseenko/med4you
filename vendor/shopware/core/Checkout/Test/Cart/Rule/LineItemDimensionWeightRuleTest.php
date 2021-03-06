<?php declare(strict_types=1);

namespace Shopware\Core\Checkout\Test\Cart\Rule;

use PHPUnit\Framework\TestCase;
use Shopware\Core\Checkout\Cart\Exception\InvalidQuantityException;
use Shopware\Core\Checkout\Cart\LineItem\LineItem;
use Shopware\Core\Checkout\Cart\LineItem\LineItemCollection;
use Shopware\Core\Checkout\Cart\Rule\CartRuleScope;
use Shopware\Core\Checkout\Cart\Rule\LineItemDimensionWeightRule;
use Shopware\Core\Checkout\Cart\Rule\LineItemScope;
use Shopware\Core\Checkout\Test\Cart\Rule\Helper\CartRuleHelperTrait;
use Shopware\Core\Framework\Rule\Rule;
use Shopware\Core\System\SalesChannel\SalesChannelContext;

/**
 * @internal
 * @group rules
 */
class LineItemDimensionWeightRuleTest extends TestCase
{
    use CartRuleHelperTrait;

    private LineItemDimensionWeightRule $rule;

    protected function setUp(): void
    {
        $this->rule = new LineItemDimensionWeightRule();
    }

    public function testGetName(): void
    {
        static::assertSame('cartLineItemDimensionWeight', $this->rule->getName());
    }

    public function testGetConstraints(): void
    {
        $ruleConstraints = $this->rule->getConstraints();

        static::assertArrayHasKey('amount', $ruleConstraints, 'Rule Constraint amount is not defined');
        static::assertArrayHasKey('operator', $ruleConstraints, 'Rule Constraint operator is not defined');
    }

    /**
     * @dataProvider getMatchingRuleTestData
     */
    public function testIfMatchesCorrectWithLineItem(
        string $operator,
        float $weight,
        float $lineItemWeight,
        bool $expected
    ): void {
        $this->rule->assign([
            'amount' => $weight,
            'operator' => $operator,
        ]);

        $match = $this->rule->match(new LineItemScope(
            $this->createLineItemWithWeight($lineItemWeight),
            $this->createMock(SalesChannelContext::class)
        ));

        static::assertSame($expected, $match);
    }

    public function getMatchingRuleTestData(): array
    {
        return [
            // OPERATOR_EQ
            'match / operator equals / same weight' => [Rule::OPERATOR_EQ, 100, 100, true],
            'no match / operator equals / different weight' => [Rule::OPERATOR_EQ, 200, 100, false],
            // OPERATOR_NEQ
            'no match / operator not equals / same weight' => [Rule::OPERATOR_NEQ, 100, 100, false],
            'match / operator not equals / different weight' => [Rule::OPERATOR_NEQ, 200, 100, true],
            // OPERATOR_GT
            'no match / operator greater than / lower weight' => [Rule::OPERATOR_GT, 100, 50, false],
            'no match / operator greater than / same weight' => [Rule::OPERATOR_GT, 100, 100, false],
            'match / operator greater than / higher weight' => [Rule::OPERATOR_GT, 100, 200, true],
            // OPERATOR_GTE
            'no match / operator greater than equals / lower weight' => [Rule::OPERATOR_GTE, 100, 50, false],
            'match / operator greater than equals / same weight' => [Rule::OPERATOR_GTE, 100, 100, true],
            'match / operator greater than equals / higher weight' => [Rule::OPERATOR_GTE, 100, 200, true],
            // OPERATOR_LT
            'match / operator lower than / lower weight' => [Rule::OPERATOR_LT, 100, 50, true],
            'no match / operator lower  than / same weight' => [Rule::OPERATOR_LT, 100, 100, false],
            'no match / operator lower than / higher weight' => [Rule::OPERATOR_LT, 100, 200, false],
            // OPERATOR_LTE
            'match / operator lower than equals / lower weight' => [Rule::OPERATOR_LTE, 100, 50, true],
            'match / operator lower than equals / same weight' => [Rule::OPERATOR_LTE, 100, 100, true],
            'no match / operator lower than equals / higher weight' => [Rule::OPERATOR_LTE, 100, 200, false],
            // OPERATOR_EMPTY
            'match / operator empty / null weight' => [Rule::OPERATOR_EMPTY, 100, 0, true],
            'no match / operator empty / weight' => [Rule::OPERATOR_EMPTY, 100, 200, false],
        ];
    }

    /**
     * @dataProvider getCartRuleScopeTestData
     */
    public function testIfMatchesCorrectWithCartRuleScope(
        string $operator,
        float $weight,
        float $lineItemWeight1,
        float $lineItemWeight2,
        bool $expected
    ): void {
        $this->rule->assign([
            'amount' => $weight,
            'operator' => $operator,
        ]);

        $lineItemCollection = new LineItemCollection([
            $this->createLineItemWithWeight($lineItemWeight1),
            $this->createLineItemWithWeight($lineItemWeight2),
        ]);
        $cart = $this->createCart($lineItemCollection);

        $match = $this->rule->match(new CartRuleScope(
            $cart,
            $this->createMock(SalesChannelContext::class)
        ));

        static::assertSame($expected, $match);
    }

    /**
     * @dataProvider getCartRuleScopeTestData
     */
    public function testIfMatchesCorrectWithCartRuleScopeNested(
        string $operator,
        float $weight,
        float $lineItemWeight1,
        float $lineItemWeight2,
        bool $expected
    ): void {
        $this->rule->assign([
            'amount' => $weight,
            'operator' => $operator,
        ]);

        $lineItemCollection = new LineItemCollection([
            $this->createLineItemWithWeight($lineItemWeight1),
            $this->createLineItemWithWeight($lineItemWeight2),
        ]);
        $containerLineItem = $this->createContainerLineItem($lineItemCollection);
        $cart = $this->createCart(new LineItemCollection([$containerLineItem]));

        $match = $this->rule->match(new CartRuleScope(
            $cart,
            $this->createMock(SalesChannelContext::class)
        ));

        static::assertSame($expected, $match);
    }

    public function getCartRuleScopeTestData(): array
    {
        return [
            // OPERATOR_EQ
            'match / operator equals / same weight' => [Rule::OPERATOR_EQ, 100, 100, 200, true],
            'no match / operator equals / different weight' => [Rule::OPERATOR_EQ, 200, 100, 300, false],
            // OPERATOR_NEQ
            'no match / operator not equals / same weight' => [Rule::OPERATOR_NEQ, 100, 100, 100, false],
            'match / operator not equals / different weight' => [Rule::OPERATOR_NEQ, 200, 100, 200, true],
            'match / operator not equals / different weight 2' => [Rule::OPERATOR_NEQ, 200, 100, 300, true],
            // OPERATOR_GT
            'no match / operator greater than / lower weight' => [Rule::OPERATOR_GT, 100, 50, 70, false],
            'no match / operator greater than / same weight' => [Rule::OPERATOR_GT, 100, 100, 70, false],
            'match / operator greater than / higher weight' => [Rule::OPERATOR_GT, 100, 200, 70, true],
            // OPERATOR_GTE
            'no match / operator greater than equals / lower weight' => [Rule::OPERATOR_GTE, 100, 50, 70, false],
            'match / operator greater than equals / same weight' => [Rule::OPERATOR_GTE, 100, 100, 70, true],
            'match / operator greater than equals / higher weight' => [Rule::OPERATOR_GTE, 100, 200, 70, true],
            // OPERATOR_LT
            'match / operator lower than / lower weight' => [Rule::OPERATOR_LT, 100, 50, 120, true],
            'no match / operator lower  than / same weight' => [Rule::OPERATOR_LT, 100, 100, 120, false],
            'no match / operator lower than / higher weight' => [Rule::OPERATOR_LT, 100, 200, 120, false],
            // OPERATOR_LTE
            'match / operator lower than equals / lower weight' => [Rule::OPERATOR_LTE, 100, 50, 120, true],
            'match / operator lower than equals / same weight' => [Rule::OPERATOR_LTE, 100, 100, 120, true],
            'no match / operator lower than equals / higher weight' => [Rule::OPERATOR_LTE, 100, 200, 120, false],
            // OPERATOR_EMPTY
            'match / operator empty / null weight 1' => [Rule::OPERATOR_EMPTY, 100, 0, 120, true],
            'match / operator empty / null weight 2' => [Rule::OPERATOR_EMPTY, 100, 100, 0, true],
            'no match / operator empty / weight' => [Rule::OPERATOR_EMPTY, 100, 200, 120, false],
        ];
    }

    /**
     * @throws InvalidQuantityException
     */
    public function testMatchWithEmptyDeliveryInformation(): void
    {
        $this->rule->assign(['amount' => 100, 'operator' => Rule::OPERATOR_EQ]);

        $match = $this->rule->match(new LineItemScope(
            $this->createLineItem(),
            $this->createMock(SalesChannelContext::class)
        ));

        static::assertFalse($match);
    }

    private function createLineItemWithWeight(float $weight): LineItem
    {
        return $this->createLineItemWithDeliveryInfo(false, 1, $weight);
    }
}
