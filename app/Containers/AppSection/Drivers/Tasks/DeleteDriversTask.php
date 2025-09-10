<?php

namespace App\Containers\AppSection\Drivers\Tasks;

use App\Containers\AppSection\Drivers\Data\Repositories\DriversRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class DeleteDriversTask extends ParentTask
{
    public function __construct(
        private readonly DriversRepository $repository,
    ) {
    }

    public function run($id): bool
    {
        return $this->repository->delete($id);
    }
}
