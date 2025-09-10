<?php

namespace App\Containers\AppSection\Trips\Actions;

use App\Containers\AppSection\Trips\Models\Trips;
use App\Containers\AppSection\Trips\Tasks\FindTripsByIdTask;
use App\Containers\AppSection\Trips\UI\API\Requests\FindTripsByIdRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class FindTripsByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindTripsByIdTask $findTripsByIdTask,
    ) {
    }

    public function run(FindTripsByIdRequest $request): Trips
    {
        return $this->findTripsByIdTask->run($request->id);
    }
}
