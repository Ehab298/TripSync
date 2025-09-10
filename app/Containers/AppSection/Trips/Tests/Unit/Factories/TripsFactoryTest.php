<?php

namespace App\Containers\AppSection\Trips\Tests\Unit\Factories;

use App\Containers\AppSection\Trips\Data\Factories\TripsFactory;
use App\Containers\AppSection\Trips\Models\Trips;
use App\Containers\AppSection\Trips\Tests\UnitTestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(TripsFactory::class)]
final class TripsFactoryTest extends UnitTestCase
{
    public function testCreateTrips(): void
    {
        $trips = Trips::factory()->make();

        $this->assertInstanceOf(Trips::class, $trips);
    }
}
