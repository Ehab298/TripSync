<?php

namespace App\Containers\AppSection\Companies\Tests\Unit\Tasks;

use App\Containers\AppSection\Companies\Models\Companies;
use App\Containers\AppSection\Companies\Tasks\DeleteCompaniesTask;
use App\Containers\AppSection\Companies\Tests\UnitTestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(DeleteCompaniesTask::class)]
final class DeleteCompaniesTaskTest extends UnitTestCase
{
    public function testDeleteCompanies(): void
    {
        $companies = Companies::factory()->createOne();

        $result = app(DeleteCompaniesTask::class)->run($companies->id);

        $this->assertEquals(1, $result);
    }
}
