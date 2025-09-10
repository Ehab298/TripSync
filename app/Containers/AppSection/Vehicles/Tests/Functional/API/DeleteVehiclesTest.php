<?php

namespace App\Containers\AppSection\Vehicles\Tests\Functional\API;

use App\Containers\AppSection\Vehicles\Models\Vehicles;
use App\Containers\AppSection\Vehicles\Tests\Functional\ApiTestCase;
use App\Containers\AppSection\Vehicles\UI\API\Controllers\DeleteVehiclesController;
use App\Containers\AppSection\User\Models\User;
use PHPUnit\Framework\Attributes\CoversNothing;

#[CoversNothing]
final class DeleteVehiclesTest extends ApiTestCase
{
    public function testDeleteExistingVehicles(): void
    {
        $this->actingAs(User::factory()->createOne());
        $vehicles = Vehicles::factory()->createOne();

        $response = $this->deleteJson(action(DeleteVehiclesController::class, ['id' => $vehicles->getHashedKey()]));

        $response->assertNoContent();
    }
}
