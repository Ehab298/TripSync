<?php

namespace App\Containers\AppSection\Trips\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class FindTripsByIdRequest extends ParentRequest
{
    protected array $decode = [
        'id',
    ];

    public function rules(): array
    {
        return [];
    }
}
