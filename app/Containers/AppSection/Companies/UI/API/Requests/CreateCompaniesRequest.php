<?php

namespace App\Containers\AppSection\Companies\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class CreateCompaniesRequest extends ParentRequest
{
    protected array $decode = [];

    public function rules(): array
    {
        return [];
    }
}
