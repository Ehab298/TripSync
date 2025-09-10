<?php

namespace App\Containers\AppSection\Vehicles\Tests\Unit\Data\Migrations;

use App\Containers\AppSection\Vehicles\Tests\UnitTestCase;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
final class VehiclesMigrationTest extends UnitTestCase
{
    public function testVehiclesTableHasExpectedColumns(): void
    {
        $columns = [
            'id' => 'int8',
            'created_at' => 'timestamp',
            'updated_at' => 'timestamp',
        ];

        $this->assertDatabaseTable('vehicles', $columns);
    }
}
