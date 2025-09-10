<?php

namespace App\Containers\AppSection\Trips\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class ListTripsRequest extends ParentRequest
{
    protected array $decode = [];

    public function rules(): array
    {
        return [];
    }
}
