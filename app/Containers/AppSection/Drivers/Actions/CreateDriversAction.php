<?php

namespace App\Containers\AppSection\Drivers\Actions;

use App\Containers\AppSection\Drivers\Models\Drivers;
use App\Containers\AppSection\Drivers\Tasks\CreateDriversTask;
use App\Containers\AppSection\Drivers\UI\API\Requests\CreateDriversRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class CreateDriversAction extends ParentAction
{
    public function __construct(
        private readonly CreateDriversTask $createDriversTask,
    ) {
    }

    public function run(CreateDriversRequest $request): Drivers
    {
        $data = $request->sanitize([
            // add your request data here
        ]);

        return $this->createDriversTask->run($data);
    }
}
