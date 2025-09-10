<?php

namespace App\Containers\AppSection\Vehicles\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class CreateVehiclesRequest extends ParentRequest
{
    protected array $decode = [];

    public function rules(): array
    {
        return [];
    }
}
