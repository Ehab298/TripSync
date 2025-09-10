<?php

namespace App\Containers\AppSection\Trips\Tests\Functional\API;

use App\Containers\AppSection\Trips\Models\Trips;
use App\Containers\AppSection\Trips\Tests\Functional\ApiTestCase;
use App\Containers\AppSection\Trips\UI\API\Controllers\UpdateTripsController;
use App\Containers\AppSection\User\Models\User;
use Illuminate\Testing\Fluent\AssertableJson;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
final class UpdateTripsTest extends ApiTestCase
{
    // TODO: test
    public function testUpdateExistingTrips(): void
    {
        $this->actingAs(User::factory()->createOne());
        $trips = Trips::factory()->createOne([
            // 'some_field' => 'new_field_value',
        ]);
        $data = [
            // 'some_field' => 'new_field_value',
        ];

        $response = $this->patchJson(action(UpdateTripsController::class, ['id' => $trips->getHashedKey()]), $data);

        $response->assertOk();
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                    ->where('data.type', 'Trips')
                    ->where('data.id', $trips->getHashedKey())
                    // ->where('data.some_field', $data['some_field'])
                    ->etc()
        );
    }
}
