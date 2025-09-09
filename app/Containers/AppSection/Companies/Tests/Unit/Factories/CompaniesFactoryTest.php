<?php

namespace App\Containers\AppSection\Companies\Tests\Unit\Factories;

use App\Containers\AppSection\Companies\Data\Factories\CompaniesFactory;
use App\Containers\AppSection\Companies\Models\Companies;
use App\Containers\AppSection\Companies\Tests\UnitTestCase;
use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(CompaniesFactory::class)]
final class CompaniesFactoryTest extends UnitTestCase
{
    public function testCreateCompanies(): void
    {
        $companies = Companies::factory()->make();

        $this->assertInstanceOf(Companies::class, $companies);
    }
}
