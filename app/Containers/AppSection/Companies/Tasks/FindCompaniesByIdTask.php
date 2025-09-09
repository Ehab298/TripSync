<?php

namespace App\Containers\AppSection\Companies\Tasks;

use App\Containers\AppSection\Companies\Data\Repositories\CompaniesRepository;
use App\Containers\AppSection\Companies\Models\Companies;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class FindCompaniesByIdTask extends ParentTask
{
    public function __construct(
        private readonly CompaniesRepository $repository,
    ) {
    }

    public function run($id): Companies
    {
        return $this->repository->findOrFail($id);
    }
}
