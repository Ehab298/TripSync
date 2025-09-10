<?php

namespace App\Containers\AppSection\Drivers\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class ListDriversRequest extends ParentRequest
{
    protected array $decode = [];

    public function rules(): array
    {
        return [];
    }
}
