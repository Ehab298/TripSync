<?php

namespace App\Containers\AppSection\Drivers\Actions;

use App\Containers\AppSection\Drivers\Models\Drivers;
use App\Containers\AppSection\Drivers\Tasks\FindDriversByIdTask;
use App\Containers\AppSection\Drivers\UI\API\Requests\FindDriversByIdRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class FindDriversByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindDriversByIdTask $findDriversByIdTask,
    ) {
    }

    public function run(FindDriversByIdRequest $request): Drivers
    {
        return $this->findDriversByIdTask->run($request->id);
    }
}
