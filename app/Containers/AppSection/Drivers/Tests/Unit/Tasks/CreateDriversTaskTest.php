<?php

namespace App\Containers\AppSection\Drivers\Tests\Unit\Tasks;

use App\Containers\AppSection\Drivers\Tasks\CreateDriversTask;
use App\Containers\AppSection\Drivers\Tests\UnitTestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(CreateDriversTask::class)]
final class CreateDriversTaskTest extends UnitTestCase
{
    public function testCreateDrivers(): void
    {
        $data = [];

        $drivers = app(CreateDriversTask::class)->run($data);

        $this->assertModelExists($drivers);
    }
}
