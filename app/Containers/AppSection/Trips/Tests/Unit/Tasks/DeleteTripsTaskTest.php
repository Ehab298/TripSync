<?php

namespace App\Containers\AppSection\Trips\Tests\Unit\Tasks;

use App\Containers\AppSection\Trips\Models\Trips;
use App\Containers\AppSection\Trips\Tasks\DeleteTripsTask;
use App\Containers\AppSection\Trips\Tests\UnitTestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(DeleteTripsTask::class)]
final class DeleteTripsTaskTest extends UnitTestCase
{
    public function testDeleteTrips(): void
    {
        $trips = Trips::factory()->createOne();

        $result = app(DeleteTripsTask::class)->run($trips->id);

        $this->assertEquals(1, $result);
    }
}
