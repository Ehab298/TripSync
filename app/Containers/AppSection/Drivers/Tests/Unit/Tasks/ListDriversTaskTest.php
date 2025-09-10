<?php

namespace App\Containers\AppSection\Drivers\Tests\Unit\Tasks;

use App\Containers\AppSection\Drivers\Models\Drivers;
use App\Containers\AppSection\Drivers\Tasks\ListDriversTask;
use App\Containers\AppSection\Drivers\Tests\UnitTestCase;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(ListDriversTask::class)]
final class ListDriversTaskTest extends UnitTestCase
{
    public function testListDrivers(): void
    {
        Drivers::factory()->count(3)->create();

        $foundDrivers = app(ListDriversTask::class)->run();

        $this->assertCount(3, $foundDrivers);
        $this->assertInstanceOf(LengthAwarePaginator::class, $foundDrivers);
    }
}
