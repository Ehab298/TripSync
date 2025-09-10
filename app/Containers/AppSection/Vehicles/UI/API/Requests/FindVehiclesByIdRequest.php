<?php

namespace App\Containers\AppSection\Vehicles\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class FindVehiclesByIdRequest extends ParentRequest
{
    protected array $decode = [
        'id',
    ];

    public function rules(): array
    {
        return [];
    }
}
