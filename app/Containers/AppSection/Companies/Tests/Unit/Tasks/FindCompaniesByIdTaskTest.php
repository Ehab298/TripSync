<?php

namespace App\Containers\AppSection\Companies\Tests\Unit\Tasks;

use App\Containers\AppSection\Companies\Models\Companies;
use App\Containers\AppSection\Companies\Tasks\FindCompaniesByIdTask;
use App\Containers\AppSection\Companies\Tests\UnitTestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(FindCompaniesByIdTask::class)]
final class FindCompaniesByIdTaskTest extends UnitTestCase
{
    public function testFindCompaniesById(): void
    {
        $companies = Companies::factory()->createOne();

        $foundCompanies = app(FindCompaniesByIdTask::class)->run($companies->id);

        $this->assertEquals($companies->id, $foundCompanies->id);
    }
}
