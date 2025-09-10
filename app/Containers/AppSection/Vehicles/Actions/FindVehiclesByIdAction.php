<?php

namespace App\Containers\AppSection\Vehicles\Actions;

use App\Containers\AppSection\Vehicles\Models\Vehicles;
use App\Containers\AppSection\Vehicles\Tasks\FindVehiclesByIdTask;
use App\Containers\AppSection\Vehicles\UI\API\Requests\FindVehiclesByIdRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class FindVehiclesByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindVehiclesByIdTask $findVehiclesByIdTask,
    ) {
    }

    public function run(FindVehiclesByIdRequest $request): Vehicles
    {
        return $this->findVehiclesByIdTask->run($request->id);
    }
}
