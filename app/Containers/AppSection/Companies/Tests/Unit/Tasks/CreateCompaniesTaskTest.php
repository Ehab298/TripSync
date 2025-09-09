<?php

namespace App\Containers\AppSection\Companies\Tests\Unit\Tasks;

use App\Containers\AppSection\Companies\Tasks\CreateCompaniesTask;
use App\Containers\AppSection\Companies\Tests\UnitTestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(CreateCompaniesTask::class)]
final class CreateCompaniesTaskTest extends UnitTestCase
{
    public function testCreateCompanies(): void
    {
        $data = [];

        $companies = app(CreateCompaniesTask::class)->run($data);

        $this->assertModelExists($companies);
    }
}
