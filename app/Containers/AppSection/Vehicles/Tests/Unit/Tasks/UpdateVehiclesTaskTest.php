<?php

namespace App\Containers\AppSection\Vehicles\Tests\Unit\Tasks;

use App\Containers\AppSection\Vehicles\Models\Vehicles;
use App\Containers\AppSection\Vehicles\Tasks\UpdateVehiclesTask;
use App\Containers\AppSection\Vehicles\Tests\UnitTestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(UpdateVehiclesTask::class)]
final class UpdateVehiclesTaskTest extends UnitTestCase
{
    // TODO TEST
    public function testUpdateVehicles(): void
    {
        $vehicles = Vehicles::factory()->create([
            // 'some_field' => 'new_field_value',
        ]);
        $data = [
            // 'some_field' => 'new_field_value',
        ];

        $updatedVehicles = app(UpdateVehiclesTask::class)->run($data, $vehicles->id);

        $this->assertEquals($vehicles->id, $updatedVehicles->id);
        // $this->assertEquals($data['some_field'], $updatedVehicles->some_field);
    }
}
