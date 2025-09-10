<?php

namespace App\Containers\AppSection\Drivers\Actions;

use App\Containers\AppSection\Drivers\Models\Drivers;
use App\Containers\AppSection\Drivers\Tasks\UpdateDriversTask;
use App\Containers\AppSection\Drivers\UI\API\Requests\UpdateDriversRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class UpdateDriversAction extends ParentAction
{
    public function __construct(
        private readonly UpdateDriversTask $updateDriversTask,
    ) {
    }

    public function run(UpdateDriversRequest $request): Drivers
    {
        $data = $request->sanitize([
            // add your request data here
        ]);

        return $this->updateDriversTask->run($data, $request->id);
    }
}
