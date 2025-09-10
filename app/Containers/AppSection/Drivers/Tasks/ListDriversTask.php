<?php

namespace App\Containers\AppSection\Drivers\Tasks;

use App\Containers\AppSection\Drivers\Data\Repositories\DriversRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class ListDriversTask extends ParentTask
{
    public function __construct(
        private readonly DriversRepository $repository,
    ) {
    }

    public function run(): mixed
    {
        return $this->repository->addRequestCriteria()->paginate();
    }
}
