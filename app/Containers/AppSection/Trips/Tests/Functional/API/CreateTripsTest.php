<?php

namespace App\Containers\AppSection\Trips\Tests\Functional\API;

use App\Containers\AppSection\Trips\Tests\Functional\ApiTestCase;
use App\Containers\AppSection\Trips\UI\API\Controllers\CreateTripsController;
use App\Containers\AppSection\User\Models\User;
use Illuminate\Testing\Fluent\AssertableJson;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
final class CreateTripsTest extends ApiTestCase
{
    public function testCreateTrips(): void
    {
        $this->actingAs(User::factory()->createOne());
        $data = [
            // TODO: test
            // 'something' => 'value',
        ];

        $response = $this->postJson(action(CreateTripsController::class), $data);

        $response->assertCreated();
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                    ->where('data.type', 'Trips')
                    // ->where('data.something', $data['something'])
                    ->etc()
        );
    }
}
