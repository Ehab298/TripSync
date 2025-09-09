<?php

namespace App\Containers\AppSection\Companies\Data\Factories;

use App\Containers\AppSection\Companies\Models\Companies;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of Companies
 *
 * @extends ParentFactory<TModel>
 */
final class CompaniesFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = Companies::class;

    public function definition(): array
    {
        return [];
    }
}
