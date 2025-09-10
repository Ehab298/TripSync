<?php

namespace App\Containers\AppSection\Drivers\Tests\Unit\Factories;

use App\Containers\AppSection\Drivers\Data\Factories\DriversFactory;
use App\Containers\AppSection\Drivers\Models\Drivers;
use App\Containers\AppSection\Drivers\Tests\UnitTestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(DriversFactory::class)]
final class DriversFactoryTest extends UnitTestCase
{
    public function testCreateDrivers(): void
    {
        $drivers = Drivers::factory()->make();

        $this->assertInstanceOf(Drivers::class, $drivers);
    }
}
