<?php

namespace App\Containers\AppSection\Companies\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

final class FindCompaniesByIdRequest extends ParentRequest
{
    protected array $decode = [
        'id',
    ];

    public function rules(): array
    {
        return [];
    }
}
