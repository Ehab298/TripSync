<?php

namespace App\Containers\AppSection\Trips\Tests\Unit\Tasks;

use App\Containers\AppSection\Trips\Models\Trips;
use App\Containers\AppSection\Trips\Tasks\FindTripsByIdTask;
use App\Containers\AppSection\Trips\Tests\UnitTestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(FindTripsByIdTask::class)]
final class FindTripsByIdTaskTest extends UnitTestCase
{
    public function testFindTripsById(): void
    {
        $trips = Trips::factory()->createOne();

        $foundTrips = app(FindTripsByIdTask::class)->run($trips->id);

        $this->assertEquals($trips->id, $foundTrips->id);
    }
}
