<?php

namespace App\Containers\AppSection\Vehicles\Tasks;

use App\Containers\AppSection\Vehicles\Data\Repositories\VehiclesRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class DeleteVehiclesTask extends ParentTask
{
    public function __construct(
        private readonly VehiclesRepository $repository,
    ) {
    }

    public function run($id): bool
    {
        return $this->repository->delete($id);
    }
}
