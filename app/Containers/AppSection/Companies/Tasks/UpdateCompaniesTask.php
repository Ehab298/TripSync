<?php

namespace App\Containers\AppSection\Companies\Tasks;

use App\Containers\AppSection\Companies\Data\Repositories\CompaniesRepository;
use App\Containers\AppSection\Companies\Models\Companies;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class UpdateCompaniesTask extends ParentTask
{
    public function __construct(
        private readonly CompaniesRepository $repository,
    ) {
    }

    public function run(array $data, $id): Companies
    {
        return $this->repository->update($data, $id);
    }
}
