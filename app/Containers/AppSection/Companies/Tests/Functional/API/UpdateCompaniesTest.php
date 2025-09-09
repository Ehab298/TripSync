<?php

namespace App\Containers\AppSection\Companies\Tests\Functional\API;

use App\Containers\AppSection\Companies\Models\Companies;
use App\Containers\AppSection\Companies\Tests\Functional\ApiTestCase;
use App\Containers\AppSection\Companies\UI\API\Controllers\UpdateCompaniesController;
use App\Containers\AppSection\User\Models\User;
use Illuminate\Testing\Fluent\AssertableJson;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
final class UpdateCompaniesTest extends ApiTestCase
{
    // TODO: test
    public function testUpdateExistingCompanies(): void
    {
        $this->actingAs(User::factory()->createOne());
        $companies = Companies::factory()->createOne([
            // 'some_field' => 'new_field_value',
        ]);
        $data = [
            // 'some_field' => 'new_field_value',
        ];

        $response = $this->patchJson(action(UpdateCompaniesController::class, ['id' => $companies->getHashedKey()]), $data);

        $response->assertOk();
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                    ->where('data.type', 'Companies')
                    ->where('data.id', $companies->getHashedKey())
                    // ->where('data.some_field', $data['some_field'])
                    ->etc()
        );
    }
}
