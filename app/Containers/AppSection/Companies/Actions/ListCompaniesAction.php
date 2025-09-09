<?php

namespace App\Containers\AppSection\Companies\Actions;

use App\Containers\AppSection\Companies\Tasks\ListCompaniesTask;
use App\Containers\AppSection\Companies\UI\API\Requests\ListCompaniesRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class ListCompaniesAction extends ParentAction
{
    public function __construct(
        private readonly ListCompaniesTask $listCompaniesTask,
    ) {
    }

    public function run(ListCompaniesRequest $request): mixed
    {
        return $this->listCompaniesTask->run();
    }
}
