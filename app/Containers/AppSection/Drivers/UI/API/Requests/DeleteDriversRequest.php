<?php

namespace App\Containers\AppSection\Drivers\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class DeleteDriversRequest extends ParentRequest
{
    protected array $decode = [
        'id',
    ];

    public function rules(): array
    {
        return [];
    }
}
