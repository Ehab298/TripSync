<?php

namespace App\Containers\AppSection\Drivers\Tests\Unit\Tasks;

use App\Containers\AppSection\Drivers\Models\Drivers;
use App\Containers\AppSection\Drivers\Tasks\FindDriversByIdTask;
use App\Containers\AppSection\Drivers\Tests\UnitTestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(FindDriversByIdTask::class)]
final class FindDriversByIdTaskTest extends UnitTestCase
{
    public function testFindDriversById(): void
    {
        $drivers = Drivers::factory()->createOne();

        $foundDrivers = app(FindDriversByIdTask::class)->run($drivers->id);

        $this->assertEquals($drivers->id, $foundDrivers->id);
    }
}
