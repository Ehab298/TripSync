<?php

namespace App\Containers\AppSection\Drivers\Actions;

use App\Containers\AppSection\Drivers\Tasks\DeleteDriversTask;
use App\Containers\AppSection\Drivers\UI\API\Requests\DeleteDriversRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class DeleteDriversAction extends ParentAction
{
    public function __construct(
        private readonly DeleteDriversTask $deleteDriversTask,
    ) {
    }

    public function run(DeleteDriversRequest $request): bool
    {
        return $this->deleteDriversTask->run($request->id);
    }
}
