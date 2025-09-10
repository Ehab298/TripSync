<?php

namespace App\Containers\AppSection\Vehicles\Tests\Functional\API;

use App\Containers\AppSection\Vehicles\Tests\Functional\ApiTestCase;
use App\Containers\AppSection\Vehicles\UI\API\Controllers\CreateVehiclesController;
use App\Containers\AppSection\User\Models\User;
use Illuminate\Testing\Fluent\AssertableJson;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
final class CreateVehiclesTest extends ApiTestCase
{
    public function testCreateVehicles(): void
    {
        $this->actingAs(User::factory()->createOne());
        $data = [
            // TODO: test
            // 'something' => 'value',
        ];

        $response = $this->postJson(action(CreateVehiclesController::class), $data);

        $response->assertCreated();
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                    ->where('data.type', 'Vehicles')
                    // ->where('data.something', $data['something'])
                    ->etc()
        );
    }
}
