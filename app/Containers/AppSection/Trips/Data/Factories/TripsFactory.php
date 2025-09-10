<?php

namespace App\Containers\AppSection\Trips\Data\Factories;

use App\Containers\AppSection\Trips\Models\Trips;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of Trips
 *
 * @extends ParentFactory<TModel>
 */
final class TripsFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = Trips::class;

    public function definition(): array
    {
        return [];
    }
}
