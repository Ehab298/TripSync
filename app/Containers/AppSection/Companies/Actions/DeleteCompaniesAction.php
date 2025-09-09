<?php

namespace App\Containers\AppSection\Companies\Actions;

use App\Containers\AppSection\Companies\Tasks\DeleteCompaniesTask;
use App\Containers\AppSection\Companies\UI\API\Requests\DeleteCompaniesRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class DeleteCompaniesAction extends ParentAction
{
    public function __construct(
        private readonly DeleteCompaniesTask $deleteCompaniesTask,
    ) {
    }

    public function run(DeleteCompaniesRequest $request): bool
    {
        return $this->deleteCompaniesTask->run($request->id);
    }
}
