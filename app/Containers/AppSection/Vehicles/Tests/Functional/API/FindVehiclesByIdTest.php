<?php

namespace App\Containers\AppSection\Vehicles\Tests\Functional\API;

use App\Containers\AppSection\Vehicles\Models\Vehicles;
use App\Containers\AppSection\Vehicles\Tests\Functional\ApiTestCase;
use App\Containers\AppSection\Vehicles\UI\API\Controllers\FindVehiclesByIdController;
use App\Containers\AppSection\User\Models\User;
use Illuminate\Testing\Fluent\AssertableJson;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
final class FindVehiclesByIdTest extends ApiTestCase
{
    public function testFindVehicles(): void
    {
        $this->actingAs(User::factory()->createOne());
        $vehicles = Vehicles::factory()->createOne();

        $response = $this->getJson(action(FindVehiclesByIdController::class, ['id' => $vehicles->getHashedKey()]));

        $response->assertOk();
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                    ->where('data.id', $vehicles->getHashedKey())
                    ->etc()
        );
    }
}
