<?php

namespace App\Containers\AppSection\Drivers\Tests\Functional\API;

use App\Containers\AppSection\Drivers\Tests\Functional\ApiTestCase;
use App\Containers\AppSection\Drivers\UI\API\Controllers\CreateDriversController;
use App\Containers\AppSection\User\Models\User;
use Illuminate\Testing\Fluent\AssertableJson;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
final class CreateDriversTest extends ApiTestCase
{
    public function testCreateDrivers(): void
    {
        $this->actingAs(User::factory()->createOne());
        $data = [
            // TODO: test
            // 'something' => 'value',
        ];

        $response = $this->postJson(action(CreateDriversController::class), $data);

        $response->assertCreated();
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                    ->where('data.type', 'Drivers')
                    // ->where('data.something', $data['something'])
                    ->etc()
        );
    }
}
