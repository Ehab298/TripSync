<?php

namespace App\Containers\AppSection\Drivers\Tests\Functional\API;

use App\Containers\AppSection\Drivers\Models\Drivers;
use App\Containers\AppSection\Drivers\Tests\Functional\ApiTestCase;
use App\Containers\AppSection\Drivers\UI\API\Controllers\ListDriversController;
use App\Containers\AppSection\User\Models\User;
use Illuminate\Testing\Fluent\AssertableJson;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
final class ListDriversTest extends ApiTestCase
{
    public function testListDriversByAdmin(): void
    {
        $this->actingAs(User::factory()->createOne());
        Drivers::factory()->count(2)->create();

        $response = $this->getJson(action(ListDriversController::class));

        $response->assertOk();
        $response->assertJson(
            static fn (AssertableJson $json) =>
                $json->has('data', 2)
                    ->etc()
        );
    }
}
