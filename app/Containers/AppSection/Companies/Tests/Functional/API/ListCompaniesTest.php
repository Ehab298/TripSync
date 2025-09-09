<?php

namespace App\Containers\AppSection\Companies\Tests\Functional\API;

use App\Containers\AppSection\Companies\Models\Companies;
use App\Containers\AppSection\Companies\Tests\Functional\ApiTestCase;
use App\Containers\AppSection\Companies\UI\API\Controllers\ListCompaniesController;
use App\Containers\AppSection\User\Models\User;
use Illuminate\Testing\Fluent\AssertableJson;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
final class ListCompaniesTest extends ApiTestCase
{
    public function testListCompaniesByAdmin(): void
    {
        $this->actingAs(User::factory()->createOne());
        Companies::factory()->count(2)->create();

        $response = $this->getJson(action(ListCompaniesController::class));

        $response->assertOk();
        $response->assertJson(
            static fn (AssertableJson $json) =>
                $json->has('data', 2)
                    ->etc()
        );
    }
}
