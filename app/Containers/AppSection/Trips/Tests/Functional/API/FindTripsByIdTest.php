<?php

namespace App\Containers\AppSection\Trips\Tests\Functional\API;

use App\Containers\AppSection\Trips\Models\Trips;
use App\Containers\AppSection\Trips\Tests\Functional\ApiTestCase;
use App\Containers\AppSection\Trips\UI\API\Controllers\FindTripsByIdController;
use App\Containers\AppSection\User\Models\User;
use Illuminate\Testing\Fluent\AssertableJson;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
final class FindTripsByIdTest extends ApiTestCase
{
    public function testFindTrips(): void
    {
        $this->actingAs(User::factory()->createOne());
        $trips = Trips::factory()->createOne();

        $response = $this->getJson(action(FindTripsByIdController::class, ['id' => $trips->getHashedKey()]));

        $response->assertOk();
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                    ->where('data.id', $trips->getHashedKey())
                    ->etc()
        );
    }
}
