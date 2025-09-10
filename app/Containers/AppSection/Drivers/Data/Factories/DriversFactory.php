<?php

namespace App\Containers\AppSection\Drivers\Data\Factories;

use App\Containers\AppSection\Drivers\Models\Drivers;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of Drivers
 *
 * @extends ParentFactory<TModel>
 */
final class DriversFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = Drivers::class;

    public function definition(): array
    {
        return [];
    }
}
