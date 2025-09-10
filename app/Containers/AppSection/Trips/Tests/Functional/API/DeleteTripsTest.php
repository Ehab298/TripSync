<?php

namespace App\Containers\AppSection\Trips\Tests\Functional\API;

use App\Containers\AppSection\Trips\Models\Trips;
use App\Containers\AppSection\Trips\Tests\Functional\ApiTestCase;
use App\Containers\AppSection\Trips\UI\API\Controllers\DeleteTripsController;
use App\Containers\AppSection\User\Models\User;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
final class DeleteTripsTest extends ApiTestCase
{
    public function testDeleteExistingTrips(): void
    {
        $this->actingAs(User::factory()->createOne());
        $trips = Trips::factory()->createOne();

        $response = $this->deleteJson(action(DeleteTripsController::class, ['id' => $trips->getHashedKey()]));

        $response->assertNoContent();
    }
}
