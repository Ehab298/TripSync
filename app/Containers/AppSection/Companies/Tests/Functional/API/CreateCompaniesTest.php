<?php

namespace App\Containers\AppSection\Companies\Tests\Functional\API;

use App\Containers\AppSection\Companies\Tests\Functional\ApiTestCase;
use App\Containers\AppSection\Companies\UI\API\Controllers\CreateCompaniesController;
use App\Containers\AppSection\User\Models\User;
use Illuminate\Testing\Fluent\AssertableJson;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
final class CreateCompaniesTest extends ApiTestCase
{
    public function testCreateCompanies(): void
    {
        $this->actingAs(User::factory()->createOne());
        $data = [
            // TODO: test
            // 'something' => 'value',
        ];

        $response = $this->postJson(action(CreateCompaniesController::class), $data);

        $response->assertCreated();
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                    ->where('data.type', 'Companies')
                    // ->where('data.something', $data['something'])
                    ->etc()
        );
    }
}
