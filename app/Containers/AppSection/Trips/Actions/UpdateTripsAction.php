<?php

namespace App\Containers\AppSection\Trips\Actions;

use App\Containers\AppSection\Trips\Models\Trips;
use App\Containers\AppSection\Trips\Tasks\UpdateTripsTask;
use App\Containers\AppSection\Trips\UI\API\Requests\UpdateTripsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class UpdateTripsAction extends ParentAction
{
    public function __construct(
        private readonly UpdateTripsTask $updateTripsTask,
    ) {
    }

    public function run(UpdateTripsRequest $request): Trips
    {
        $data = $request->sanitize([
            // add your request data here
        ]);

        return $this->updateTripsTask->run($data, $request->id);
    }
}
