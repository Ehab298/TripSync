<?php

namespace App\Containers\AppSection\Drivers\Tasks;

use App\Containers\AppSection\Drivers\Data\Repositories\DriversRepository;
use App\Containers\AppSection\Drivers\Models\Drivers;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class FindDriversByIdTask extends ParentTask
{
    public function __construct(
        private readonly DriversRepository $repository,
    ) {
    }

    public function run($id): Drivers
    {
        return $this->repository->findOrFail($id);
    }
}
