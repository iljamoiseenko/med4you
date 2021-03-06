<?php declare(strict_types=1);

namespace Shopware\Core\Migration\Test;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Schema\Column;
use PHPUnit\Framework\TestCase;
use Shopware\Core\Framework\Test\TestCaseBase\IntegrationTestBehaviour;
use Shopware\Core\Migration\V6_4\Migration1633358879AddUpdateByColumnToImportExportProfile;

/**
 * @internal
 */
class Migration1633358879AddUpdateByColumnToImportExportProfileTest extends TestCase
{
    use IntegrationTestBehaviour;

    private Connection $connection;

    private Migration1633358879AddUpdateByColumnToImportExportProfile $migration;

    protected function setUp(): void
    {
        $this->connection = $this->getContainer()->get(Connection::class);

        $this->migration = new Migration1633358879AddUpdateByColumnToImportExportProfile();
    }

    public function testMigration(): void
    {
        $this->connection->rollBack();
        $this->prepare();
        $this->migration->update($this->connection);
        $this->connection->beginTransaction();

        // check if migration ran successfully
        $resultColumnExists = $this->hasColumn('import_export_profile', 'update_by');

        static::assertTrue($resultColumnExists);
    }

    private function prepare(): void
    {
        $resultColumnExists = $this->hasColumn('import_export_profile', 'update_by');

        if ($resultColumnExists) {
            $this->connection->executeUpdate('ALTER TABLE `import_export_profile` DROP COLUMN `update_by`');
        }
    }

    private function hasColumn(string $table, string $columnName): bool
    {
        return \count(array_filter(
            $this->connection->getSchemaManager()->listTableColumns($table),
            static function (Column $column) use ($columnName): bool {
                return $column->getName() === $columnName;
            }
        )) > 0;
    }
}
