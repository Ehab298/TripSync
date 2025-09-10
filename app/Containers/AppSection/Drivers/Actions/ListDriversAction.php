<?php

namespace App\Containers\AppSection\Drivers\Actions;

use App\Containers\AppSection\Drivers\Tasks\ListDriversTask;
use App\Containers\AppSection\Drivers\UI\API\Requests\ListDriversRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class ListDriversAction extends ParentAction
{
    public function __construct(
        private readonly ListDriversTask $listDriversTask,
    ) {
    }

    public function run(ListDriversRequest $request): mixed
    {
        return $this->listDriversTask->run();
    }
}
