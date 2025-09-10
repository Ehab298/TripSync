<?php

namespace App\Containers\AppSection\Trips\Tests\Functional\API;

use App\Containers\AppSection\Trips\Models\Trips;
use App\Containers\AppSection\Trips\Tests\Functional\ApiTestCase;
use App\Containers\AppSection\Trips\UI\API\Controllers\ListTripsController;
use App\Containers\AppSection\User\Models\User;
use Illuminate\Testing\Fluent\AssertableJson;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
final class ListTripsTest extends ApiTestCase
{
    public function testListTripsByAdmin(): void
    {
        $this->actingAs(User::factory()->createOne());
        Trips::factory()->count(2)->create();

        $response = $this->getJson(action(ListTripsController::class));

        $response->assertOk();
        $response->assertJson(
            static fn (AssertableJson $json) =>
                $json->has('data', 2)
                    ->etc()
        );
    }
}
