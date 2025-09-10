<?php

namespace App\Containers\AppSection\Vehicles\Tests\Functional\API;

use App\Containers\AppSection\Vehicles\Models\Vehicles;
use App\Containers\AppSection\Vehicles\Tests\Functional\ApiTestCase;
use App\Containers\AppSection\Vehicles\UI\API\Controllers\ListVehiclesController;
use App\Containers\AppSection\User\Models\User;
use Illuminate\Testing\Fluent\AssertableJson;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
final class ListVehiclesTest extends ApiTestCase
{
    public function testListVehiclesByAdmin(): void
    {
        $this->actingAs(User::factory()->createOne());
        Vehicles::factory()->count(2)->create();

        $response = $this->getJson(action(ListVehiclesController::class));

        $response->assertOk();
        $response->assertJson(
            static fn (AssertableJson $json) =>
                $json->has('data', 2)
                    ->etc()
        );
    }
}
