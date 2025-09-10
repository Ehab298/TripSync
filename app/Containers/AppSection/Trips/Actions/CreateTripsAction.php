<?php

namespace App\Containers\AppSection\Trips\Actions;

use App\Containers\AppSection\Trips\Models\Trips;
use App\Containers\AppSection\Trips\Tasks\CreateTripsTask;
use App\Containers\AppSection\Trips\UI\API\Requests\CreateTripsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class CreateTripsAction extends ParentAction
{
    public function __construct(
        private readonly CreateTripsTask $createTripsTask,
    ) {
    }

    public function run(CreateTripsRequest $request): Trips
    {
        $data = $request->sanitize([
            // add your request data here
        ]);

        return $this->createTripsTask->run($data);
    }
}
