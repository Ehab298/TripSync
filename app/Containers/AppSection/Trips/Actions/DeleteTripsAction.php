<?php

namespace App\Containers\AppSection\Trips\Actions;

use App\Containers\AppSection\Trips\Tasks\DeleteTripsTask;
use App\Containers\AppSection\Trips\UI\API\Requests\DeleteTripsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class DeleteTripsAction extends ParentAction
{
    public function __construct(
        private readonly DeleteTripsTask $deleteTripsTask,
    ) {
    }

    public function run(DeleteTripsRequest $request): bool
    {
        return $this->deleteTripsTask->run($request->id);
    }
}
