<?php

namespace App\Containers\AppSection\Trips\Tests\Unit\Tasks;

use App\Containers\AppSection\Trips\Tasks\CreateTripsTask;
use App\Containers\AppSection\Trips\Tests\UnitTestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(CreateTripsTask::class)]
final class CreateTripsTaskTest extends UnitTestCase
{
    public function testCreateTrips(): void
    {
        $data = [];

        $trips = app(CreateTripsTask::class)->run($data);

        $this->assertModelExists($trips);
    }
}
