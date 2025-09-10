<?php

namespace App\Containers\AppSection\Vehicles\UI\API\Transformers;

use App\Containers\AppSection\Vehicles\Models\Vehicles;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

final class VehiclesTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [];

    protected array $availableIncludes = [];

    public function transform(Vehicles $vehicles): array
    {
        return [
            'type' => $vehicles->getResourceKey(),
            'id' => $vehicles->getHashedKey(),
            'created_at' => $vehicles->created_at,
            'updated_at' => $vehicles->updated_at,
            'readable_created_at' => $vehicles->created_at->diffForHumans(),
            'readable_updated_at' => $vehicles->updated_at->diffForHumans(),
        ];
    }
}
