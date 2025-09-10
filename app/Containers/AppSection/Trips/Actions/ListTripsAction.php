<?php

namespace App\Containers\AppSection\Trips\Actions;

use App\Containers\AppSection\Trips\Tasks\ListTripsTask;
use App\Containers\AppSection\Trips\UI\API\Requests\ListTripsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class ListTripsAction extends ParentAction
{
    public function __construct(
        private readonly ListTripsTask $listTripsTask,
    ) {
    }

    public function run(ListTripsRequest $request): mixed
    {
        return $this->listTripsTask->run();
    }
}
