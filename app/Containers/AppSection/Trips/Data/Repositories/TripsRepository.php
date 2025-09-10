<?php

namespace App\Containers\AppSection\Trips\Data\Repositories;

use App\Containers\AppSection\Trips\Models\Trips;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of Trips
 *
 * @extends ParentRepository<TModel>
 */
final class TripsRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
