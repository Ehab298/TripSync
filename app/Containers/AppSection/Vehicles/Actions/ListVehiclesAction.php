<?php

namespace App\Containers\AppSection\Vehicles\Actions;

use App\Containers\AppSection\Vehicles\Tasks\ListVehiclesTask;
use App\Containers\AppSection\Vehicles\UI\API\Requests\ListVehiclesRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class ListVehiclesAction extends ParentAction
{
    public function __construct(
        private readonly ListVehiclesTask $listVehiclesTask,
    ) {
    }

    public function run(ListVehiclesRequest $request): mixed
    {
        return $this->listVehiclesTask->run();
    }
}
