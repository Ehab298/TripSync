<?php

namespace App\Containers\AppSection\Drivers\Data\Repositories;

use App\Containers\AppSection\Drivers\Models\Drivers;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of Drivers
 *
 * @extends ParentRepository<TModel>
 */
final class DriversRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
