<?php

namespace App\Containers\AppSection\Companies\Actions;

use App\Containers\AppSection\Companies\Models\Companies;
use App\Containers\AppSection\Companies\Tasks\CreateCompaniesTask;
use App\Containers\AppSection\Companies\UI\API\Requests\CreateCompaniesRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class CreateCompaniesAction extends ParentAction
{
    public function __construct(
        private readonly CreateCompaniesTask $createCompaniesTask,
    ) {
    }

    public function run(CreateCompaniesRequest $request): Companies
    {
        $data = $request->sanitize([
            // add your request data here
        ]);

        return $this->createCompaniesTask->run($data);
    }
}
