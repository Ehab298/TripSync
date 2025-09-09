<?php

namespace App\Containers\AppSection\Companies\Actions;

use App\Containers\AppSection\Companies\Models\Companies;
use App\Containers\AppSection\Companies\Tasks\FindCompaniesByIdTask;
use App\Containers\AppSection\Companies\UI\API\Requests\FindCompaniesByIdRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class FindCompaniesByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindCompaniesByIdTask $findCompaniesByIdTask,
    ) {
    }

    public function run(FindCompaniesByIdRequest $request): Companies
    {
        return $this->findCompaniesByIdTask->run($request->id);
    }
}
