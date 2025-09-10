<?php

namespace App\Containers\AppSection\Vehicles\Tests\Functional\API;

use App\Containers\AppSection\Vehicles\Models\Vehicles;
use App\Containers\AppSection\Vehicles\Tests\Functional\ApiTestCase;
use App\Containers\AppSection\Vehicles\UI\API\Controllers\UpdateVehiclesController;
use App\Containers\AppSection\User\Models\User;
use Illuminate\Testing\Fluent\AssertableJson;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
final class UpdateVehiclesTest extends ApiTestCase
{
    // TODO: test
    public function testUpdateExistingVehicles(): void
    {
        $this->actingAs(User::factory()->createOne());
        $vehicles = Vehicles::factory()->createOne([
            // 'some_field' => 'new_field_value',
        ]);
        $data = [
            // 'some_field' => 'new_field_value',
        ];

        $response = $this->patchJson(action(UpdateVehiclesController::class, ['id' => $vehicles->getHashedKey()]), $data);

        $response->assertOk();
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                    ->where('data.type', 'Vehicles')
                    ->where('data.id', $vehicles->getHashedKey())
                    // ->where('data.some_field', $data['some_field'])
                    ->etc()
        );
    }
}
