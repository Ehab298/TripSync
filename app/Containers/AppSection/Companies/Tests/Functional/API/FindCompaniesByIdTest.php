<?php

namespace App\Containers\AppSection\Companies\Tests\Functional\API;

use App\Containers\AppSection\Companies\Models\Companies;
use App\Containers\AppSection\Companies\Tests\Functional\ApiTestCase;
use App\Containers\AppSection\Companies\UI\API\Controllers\FindCompaniesByIdController;
use App\Containers\AppSection\User\Models\User;
use Illuminate\Testing\Fluent\AssertableJson;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
final class FindCompaniesByIdTest extends ApiTestCase
{
    public function testFindCompanies(): void
    {
        $this->actingAs(User::factory()->createOne());
        $companies = Companies::factory()->createOne();

        $response = $this->getJson(action(FindCompaniesByIdController::class, ['id' => $companies->getHashedKey()]));

        $response->assertOk();
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                    ->where('data.id', $companies->getHashedKey())
                    ->etc()
        );
    }
}
