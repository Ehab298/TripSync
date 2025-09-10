<?php

namespace App\Containers\AppSection\Drivers\Tests\Unit\Tasks;

use App\Containers\AppSection\Drivers\Models\Drivers;
use App\Containers\AppSection\Drivers\Tasks\DeleteDriversTask;
use App\Containers\AppSection\Drivers\Tests\UnitTestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(DeleteDriversTask::class)]
final class DeleteDriversTaskTest extends UnitTestCase
{
    public function testDeleteDrivers(): void
    {
        $drivers = Drivers::factory()->createOne();

        $result = app(DeleteDriversTask::class)->run($drivers->id);

        $this->assertEquals(1, $result);
    }
}
