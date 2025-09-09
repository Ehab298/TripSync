<?php

namespace App\Containers\AppSection\Companies\Tests\Unit\Tasks;

use App\Containers\AppSection\Companies\Models\Companies;
use App\Containers\AppSection\Companies\Tasks\UpdateCompaniesTask;
use App\Containers\AppSection\Companies\Tests\UnitTestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(UpdateCompaniesTask::class)]
final class UpdateCompaniesTaskTest extends UnitTestCase
{
    // TODO TEST
    public function testUpdateCompanies(): void
    {
        $companies = Companies::factory()->create([
            // 'some_field' => 'new_field_value',
        ]);
        $data = [
            // 'some_field' => 'new_field_value',
        ];

        $updatedCompanies = app(UpdateCompaniesTask::class)->run($data, $companies->id);

        $this->assertEquals($companies->id, $updatedCompanies->id);
        // $this->assertEquals($data['some_field'], $updatedCompanies->some_field);
    }
}
