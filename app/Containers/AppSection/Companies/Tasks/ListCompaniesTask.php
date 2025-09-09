<?php

namespace App\Containers\AppSection\Companies\Tasks;

use App\Containers\AppSection\Companies\Data\Repositories\CompaniesRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class ListCompaniesTask extends ParentTask
{
    public function __construct(
        private readonly CompaniesRepository $repository,
    ) {
    }

    public function run(): mixed
    {
        return $this->repository->addRequestCriteria()->paginate();
    }
}
