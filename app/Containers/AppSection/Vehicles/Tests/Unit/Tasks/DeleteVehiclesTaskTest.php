<?php

namespace App\Containers\AppSection\Vehicles\Tests\Unit\Tasks;

use App\Containers\AppSection\Vehicles\Models\Vehicles;
use App\Containers\AppSection\Vehicles\Tasks\DeleteVehiclesTask;
use App\Containers\AppSection\Vehicles\Tests\UnitTestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(DeleteVehiclesTask::class)]
final class DeleteVehiclesTaskTest extends UnitTestCase
{
    public function testDeleteVehicles(): void
    {
        $vehicles = Vehicles::factory()->createOne();

        $result = app(DeleteVehiclesTask::class)->run($vehicles->id);

        $this->assertEquals(1, $result);
    }
}
