<?php

namespace App\Containers\AppSection\Drivers\Tests\Functional\API;

use App\Containers\AppSection\Drivers\Models\Drivers;
use App\Containers\AppSection\Drivers\Tests\Functional\ApiTestCase;
use App\Containers\AppSection\Drivers\UI\API\Controllers\FindDriversByIdController;
use App\Containers\AppSection\User\Models\User;
use Illuminate\Testing\Fluent\AssertableJson;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
final class FindDriversByIdTest extends ApiTestCase
{
    public function testFindDrivers(): void
    {
        $this->actingAs(User::factory()->createOne());
        $drivers = Drivers::factory()->createOne();

        $response = $this->getJson(action(FindDriversByIdController::class, ['id' => $drivers->getHashedKey()]));

        $response->assertOk();
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                    ->where('data.id', $drivers->getHashedKey())
                    ->etc()
        );
    }
}
