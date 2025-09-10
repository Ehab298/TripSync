<?php

namespace App\Containers\AppSection\Vehicles\Actions;

use App\Containers\AppSection\Vehicles\Models\Vehicles;
use App\Containers\AppSection\Vehicles\Tasks\CreateVehiclesTask;
use App\Containers\AppSection\Vehicles\UI\API\Requests\CreateVehiclesRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class CreateVehiclesAction extends ParentAction
{
    public function __construct(
        private readonly CreateVehiclesTask $createVehiclesTask,
    ) {
    }

    public function run(CreateVehiclesRequest $request): Vehicles
    {
        $data = $request->sanitize([
            // add your request data here
        ]);

        return $this->createVehiclesTask->run($data);
    }
}
