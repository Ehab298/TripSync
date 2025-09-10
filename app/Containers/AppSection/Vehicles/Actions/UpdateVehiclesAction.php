<?php

namespace App\Containers\AppSection\Vehicles\Actions;

use App\Containers\AppSection\Vehicles\Models\Vehicles;
use App\Containers\AppSection\Vehicles\Tasks\UpdateVehiclesTask;
use App\Containers\AppSection\Vehicles\UI\API\Requests\UpdateVehiclesRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class UpdateVehiclesAction extends ParentAction
{
    public function __construct(
        private readonly UpdateVehiclesTask $updateVehiclesTask,
    ) {
    }

    public function run(UpdateVehiclesRequest $request): Vehicles
    {
        $data = $request->sanitize([
            // add your request data here
        ]);

        return $this->updateVehiclesTask->run($data, $request->id);
    }
}
