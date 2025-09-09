<?php

namespace App\Containers\AppSection\Companies\Actions;

use App\Containers\AppSection\Companies\Models\Companies;
use App\Containers\AppSection\Companies\Tasks\UpdateCompaniesTask;
use App\Containers\AppSection\Companies\UI\API\Requests\UpdateCompaniesRequest;
use App\Ship\Parents\Actions\Action as ParentAction;

final class UpdateCompaniesAction extends ParentAction
{
    public function __construct(
        private readonly UpdateCompaniesTask $updateCompaniesTask,
    ) {
    }

    public function run(UpdateCompaniesRequest $request): Companies
    {
        $data = $request->sanitize([
            // add your request data here
        ]);

        return $this->updateCompaniesTask->run($data, $request->id);
    }
}
