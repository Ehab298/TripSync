<?php

namespace App\Containers\AppSection\Vehicles\Tests\Unit\Tasks;

use App\Containers\AppSection\Vehicles\Models\Vehicles;
use App\Containers\AppSection\Vehicles\Tasks\ListVehiclesTask;
use App\Containers\AppSection\Vehicles\Tests\UnitTestCase;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(ListVehiclesTask::class)]
final class ListVehiclesTaskTest extends UnitTestCase
{
    public function testListVehicles(): void
    {
        Vehicles::factory()->count(3)->create();

        $foundVehicles = app(ListVehiclesTask::class)->run();

        $this->assertCount(3, $foundVehicles);
        $this->assertInstanceOf(LengthAwarePaginator::class, $foundVehicles);
    }
}
