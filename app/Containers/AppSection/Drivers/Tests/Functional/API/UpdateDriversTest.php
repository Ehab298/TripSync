<?php

namespace App\Containers\AppSection\Drivers\Tests\Functional\API;

use App\Containers\AppSection\Drivers\Models\Drivers;
use App\Containers\AppSection\Drivers\Tests\Functional\ApiTestCase;
use App\Containers\AppSection\Drivers\UI\API\Controllers\UpdateDriversController;
use App\Containers\AppSection\User\Models\User;
use Illuminate\Testing\Fluent\AssertableJson;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
final class UpdateDriversTest extends ApiTestCase
{
    // TODO: test
    public function testUpdateExistingDrivers(): void
    {
        $this->actingAs(User::factory()->createOne());
        $drivers = Drivers::factory()->createOne([
            // 'some_field' => 'new_field_value',
        ]);
        $data = [
            // 'some_field' => 'new_field_value',
        ];

        $response = $this->patchJson(action(UpdateDriversController::class, ['id' => $drivers->getHashedKey()]), $data);

        $response->assertOk();
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                    ->where('data.type', 'Drivers')
                    ->where('data.id', $drivers->getHashedKey())
                    // ->where('data.some_field', $data['some_field'])
                    ->etc()
        );
    }
}
