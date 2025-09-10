<?php

namespace App\Containers\AppSection\Vehicles\Data\Repositories;

use App\Containers\AppSection\Vehicles\Models\Vehicles;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of Vehicles
 *
 * @extends ParentRepository<TModel>
 */
final class VehiclesRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
