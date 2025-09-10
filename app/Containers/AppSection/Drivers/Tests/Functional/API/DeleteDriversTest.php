<?php

namespace App\Containers\AppSection\Drivers\Tests\Functional\API;

use App\Containers\AppSection\Drivers\Models\Drivers;
use App\Containers\AppSection\Drivers\Tests\Functional\ApiTestCase;
use App\Containers\AppSection\Drivers\UI\API\Controllers\DeleteDriversController;
use App\Containers\AppSection\User\Models\User;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
final class DeleteDriversTest extends ApiTestCase
{
    public function testDeleteExistingDrivers(): void
    {
        $this->actingAs(User::factory()->createOne());
        $drivers = Drivers::factory()->createOne();

        $response = $this->deleteJson(action(DeleteDriversController::class, ['id' => $drivers->getHashedKey()]));

        $response->assertNoContent();
    }
}
