<?php

namespace App\Containers\AppSection\Companies\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class ListCompaniesRequest extends ParentRequest
{
    protected array $decode = [];

    public function rules(): array
    {
        return [];
    }
}
