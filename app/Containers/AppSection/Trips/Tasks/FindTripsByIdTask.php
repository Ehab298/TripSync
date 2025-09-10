<?php

namespace App\Containers\AppSection\Trips\Tasks;

use App\Containers\AppSection\Trips\Data\Repositories\TripsRepository;
use App\Containers\AppSection\Trips\Models\Trips;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class FindTripsByIdTask extends ParentTask
{
    public function __construct(
        private readonly TripsRepository $repository,
    ) {
    }

    public function run($id): Trips
    {
        return $this->repository->findOrFail($id);
    }
}
