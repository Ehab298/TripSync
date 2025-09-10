<?php

namespace App\Containers\AppSection\Drivers\UI\API\Transformers;

use App\Containers\AppSection\Drivers\Models\Drivers;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

final class DriversTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [];

    protected array $availableIncludes = [];

    public function transform(Drivers $drivers): array
    {
        return [
            'type' => $drivers->getResourceKey(),
            'id' => $drivers->getHashedKey(),
            'created_at' => $drivers->created_at,
            'updated_at' => $drivers->updated_at,
            'readable_created_at' => $drivers->created_at->diffForHumans(),
            'readable_updated_at' => $drivers->updated_at->diffForHumans(),
        ];
    }
}
