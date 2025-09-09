<?php

namespace App\Containers\AppSection\Companies\Tests\Unit\Tasks;

use App\Containers\AppSection\Companies\Models\Companies;
use App\Containers\AppSection\Companies\Tasks\ListCompaniesTask;
use App\Containers\AppSection\Companies\Tests\UnitTestCase;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(ListCompaniesTask::class)]
final class ListCompaniesTaskTest extends UnitTestCase
{
    public function testListCompanies(): void
    {
        Companies::factory()->count(3)->create();

        $foundCompanies = app(ListCompaniesTask::class)->run();

        $this->assertCount(3, $foundCompanies);
        $this->assertInstanceOf(LengthAwarePaginator::class, $foundCompanies);
    }
}
