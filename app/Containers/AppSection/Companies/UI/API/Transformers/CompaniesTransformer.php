<?php

namespace App\Containers\AppSection\Companies\UI\API\Transformers;

use App\Containers\AppSection\Companies\Models\Companies;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

final class CompaniesTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [];

    protected array $availableIncludes = [];

    public function transform(Companies $companies): array
    {
        return [
            'type' => $companies->getResourceKey(),
            'id' => $companies->getHashedKey(),
            'created_at' => $companies->created_at,
            'updated_at' => $companies->updated_at,
            'readable_created_at' => $companies->created_at->diffForHumans(),
            'readable_updated_at' => $companies->updated_at->diffForHumans(),
        ];
    }
}
