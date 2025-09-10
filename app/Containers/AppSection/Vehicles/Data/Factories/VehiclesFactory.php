<?php

namespace App\Containers\AppSection\Vehicles\Data\Factories;

use App\Containers\AppSection\Vehicles\Models\Vehicles;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of Vehicles
 *
 * @extends ParentFactory<TModel>
 */
final class VehiclesFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = Vehicles::class;

    public function definition(): array
    {
        return [];
    }
}
