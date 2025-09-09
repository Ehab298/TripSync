<?php

namespace App\Containers\AppSection\Companies\Tests\Functional\API;

use App\Containers\AppSection\Companies\Models\Companies;
use App\Containers\AppSection\Companies\Tests\Functional\ApiTestCase;
use App\Containers\AppSection\Companies\UI\API\Controllers\DeleteCompaniesController;
use App\Containers\AppSection\User\Models\User;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
final class DeleteCompaniesTest extends ApiTestCase
{
    public function testDeleteExistingCompanies(): void
    {
        $this->actingAs(User::factory()->createOne());
        $companies = Companies::factory()->createOne();

        $response = $this->deleteJson(action(DeleteCompaniesController::class, ['id' => $companies->getHashedKey()]));

        $response->assertNoContent();
    }
}
