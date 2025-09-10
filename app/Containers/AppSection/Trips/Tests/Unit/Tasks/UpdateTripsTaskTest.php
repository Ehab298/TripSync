<?php

namespace App\Containers\AppSection\Trips\Tests\Unit\Tasks;

use App\Containers\AppSection\Trips\Models\Trips;
use App\Containers\AppSection\Trips\Tasks\UpdateTripsTask;
use App\Containers\AppSection\Trips\Tests\UnitTestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(UpdateTripsTask::class)]
final class UpdateTripsTaskTest extends UnitTestCase
{
    // TODO TEST
    public function testUpdateTrips(): void
    {
        $trips = Trips::factory()->create([
            // 'some_field' => 'new_field_value',
        ]);
        $data = [
            // 'some_field' => 'new_field_value',
        ];

        $updatedTrips = app(UpdateTripsTask::class)->run($data, $trips->id);

        $this->assertEquals($trips->id, $updatedTrips->id);
        // $this->assertEquals($data['some_field'], $updatedTrips->some_field);
    }
}
