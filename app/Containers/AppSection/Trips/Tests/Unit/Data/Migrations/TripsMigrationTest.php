<?php

namespace App\Containers\AppSection\Trips\Tests\Unit\Data\Migrations;

use App\Containers\AppSection\Trips\Tests\UnitTestCase;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
final class TripsMigrationTest extends UnitTestCase
{
    public function testTripsTableHasExpectedColumns(): void
    {
        $columns = [
            'id' => 'int8',
            'created_at' => 'timestamp',
            'updated_at' => 'timestamp',
        ];

        $this->assertDatabaseTable('trips', $columns);
    }
}
