<?php

namespace App\Containers\AppSection\Vehicles\Tests\Unit\Factories;

use App\Containers\AppSection\Vehicles\Data\Factories\VehiclesFactory;
use App\Containers\AppSection\Vehicles\Models\Vehicles;
use App\Containers\AppSection\Vehicles\Tests\UnitTestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(VehiclesFactory::class)]
final class VehiclesFactoryTest extends UnitTestCase
{
    public function testCreateVehicles(): void
    {
        $vehicles = Vehicles::factory()->make();

        $this->assertInstanceOf(Vehicles::class, $vehicles);
    }
}
