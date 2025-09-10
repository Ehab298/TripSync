<?php

namespace App\Containers\AppSection\Vehicles\Tests\Unit\Tasks;

use App\Containers\AppSection\Vehicles\Models\Vehicles;
use App\Containers\AppSection\Vehicles\Tasks\FindVehiclesByIdTask;
use App\Containers\AppSection\Vehicles\Tests\UnitTestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(FindVehiclesByIdTask::class)]
final class FindVehiclesByIdTaskTest extends UnitTestCase
{
    public function testFindVehiclesById(): void
    {
        $vehicles = Vehicles::factory()->createOne();

        $foundVehicles = app(FindVehiclesByIdTask::class)->run($vehicles->id);

        $this->assertEquals($vehicles->id, $foundVehicles->id);
    }
}
