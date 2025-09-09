<?php

namespace App\Containers\AppSection\Companies\Data\Repositories;

use App\Containers\AppSection\Companies\Models\Companies;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

/**
 * @template TModel of Companies
 *
 * @extends ParentRepository<TModel>
 */
final class CompaniesRepository extends ParentRepository
{
    protected $fieldSearchable = [
        // 'id' => '=',
    ];
}
