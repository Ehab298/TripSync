<?php

namespace App\Containers\AppSection\Trips\Tests\Unit\Tasks;

use App\Containers\AppSection\Trips\Models\Trips;
use App\Containers\AppSection\Trips\Tasks\ListTripsTask;
use App\Containers\AppSection\Trips\Tests\UnitTestCase;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(ListTripsTask::class)]
final class ListTripsTaskTest extends UnitTestCase
{
    public function testListTrips(): void
    {
        Trips::factory()->count(3)->create();

        $foundTrips = app(ListTripsTask::class)->run();

        $this->assertCount(3, $foundTrips);
        $this->assertInstanceOf(LengthAwarePaginator::class, $foundTrips);
    }
}
