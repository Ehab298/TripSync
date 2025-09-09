<?php

namespace App\Containers\AppSection\Companies\Tests\Unit\Data\Migrations;

use App\Containers\AppSection\Companies\Tests\UnitTestCase;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
final class CompaniesMigrationTest extends UnitTestCase
{
    public function testCompaniesTableHasExpectedColumns(): void
    {
        $columns = [
            'id' => 'int8',
            'created_at' => 'timestamp',
            'updated_at' => 'timestamp',
        ];

        $this->assertDatabaseTable('companies', $columns);
    }
}
