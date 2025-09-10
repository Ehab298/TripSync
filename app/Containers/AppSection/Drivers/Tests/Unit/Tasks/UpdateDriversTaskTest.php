<?php

namespace App\Containers\AppSection\Drivers\Tests\Unit\Tasks;

use App\Containers\AppSection\Drivers\Models\Drivers;
use App\Containers\AppSection\Drivers\Tasks\UpdateDriversTask;
use App\Containers\AppSection\Drivers\Tests\UnitTestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(UpdateDriversTask::class)]
final class UpdateDriversTaskTest extends UnitTestCase
{
    // TODO TEST
    public function testUpdateDrivers(): void
    {
        $drivers = Drivers::factory()->create([
            // 'some_field' => 'new_field_value',
        ]);
        $data = [
            // 'some_field' => 'new_field_value',
        ];

        $updatedDrivers = app(UpdateDriversTask::class)->run($data, $drivers->id);

        $this->assertEquals($drivers->id, $updatedDrivers->id);
        // $this->assertEquals($data['some_field'], $updatedDrivers->some_field);
    }
}
