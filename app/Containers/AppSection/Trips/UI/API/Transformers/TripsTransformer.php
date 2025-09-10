<?php

namespace App\Containers\AppSection\Trips\UI\API\Transformers;

use App\Containers\AppSection\Trips\Models\Trips;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

final class TripsTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [];

    protected array $availableIncludes = [];

    public function transform(Trips $trips): array
    {
        return [
            'type' => $trips->getResourceKey(),
            'id' => $trips->getHashedKey(),
            'created_at' => $trips->created_at,
            'updated_at' => $trips->updated_at,
            'readable_created_at' => $trips->created_at->diffForHumans(),
            'readable_updated_at' => $trips->updated_at->diffForHumans(),
        ];
    }
}
