<?php

namespace App\Containers\AppSection\Drivers\Tests\Unit\Data\Migrations;

use App\Containers\AppSection\Drivers\Tests\UnitTestCase;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
final class DriversMigrationTest extends UnitTestCase
{
    public function testDriversTableHasExpectedColumns(): void
    {
        $columns = [
            'id' => 'int8',
            'created_at' => 'timestamp',
            'updated_at' => 'timestamp',
        ];

        $this->assertDatabaseTable('drivers', $columns);
    }
}
