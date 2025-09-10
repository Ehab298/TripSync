<?php

namespace App\Containers\AppSection\Vehicles\Actions;

use App\Containers\AppSection\Vehicles\Tasks\DeleteVehiclesTask;
use App\Containers\AppSection\Vehicles\UI\API\Requests\DeleteVehiclesRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class DeleteVehiclesAction extends ParentAction
{
    public function __construct(
        private readonly DeleteVehiclesTask $deleteVehiclesTask,
    ) {
    }

    public function run(DeleteVehiclesRequest $request): bool
    {
        return $this->deleteVehiclesTask->run($request->id);
    }
}
