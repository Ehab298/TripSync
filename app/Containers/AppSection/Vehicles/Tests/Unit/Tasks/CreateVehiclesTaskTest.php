<?php

namespace App\Containers\AppSection\Vehicles\Tests\Unit\Tasks;

use App\Containers\AppSection\Vehicles\Tasks\CreateVehiclesTask;
use App\Containers\AppSection\Vehicles\Tests\UnitTestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(CreateVehiclesTask::class)]
final class CreateVehiclesTaskTest extends UnitTestCase
{
    public function testCreateVehicles(): void
    {
        $data = [];

        $vehicles = app(CreateVehiclesTask::class)->run($data);

        $this->assertModelExists($vehicles);
    }
}
