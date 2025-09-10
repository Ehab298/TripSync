<?php

namespace App\Containers\AppSection\Vehicles\Tasks;

use App\Containers\AppSection\Vehicles\Data\Repositories\VehiclesRepository;
use App\Containers\AppSection\Vehicles\Models\Vehicles;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class CreateVehiclesTask extends ParentTask
{
    public function __construct(
        private readonly VehiclesRepository $repository,
    ) {
    }

    public function run(array $data): Vehicles
    {
        return $this->repository->create($data);
    }
}
