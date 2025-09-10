<?php

namespace App\Containers\AppSection\Trips\Tasks;

use App\Containers\AppSection\Trips\Data\Repositories\TripsRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;

final class ListTripsTask extends ParentTask
{
    public function __construct(
        private readonly TripsRepository $repository,
    ) {
    }

    public function run(): mixed
    {
        return $this->repository->addRequestCriteria()->paginate();
    }
}
