<?php

namespace App\Containers\AppSection\Companies\Models;

use App\Ship\Parents\Models\Model as ParentModel;

final class Companies extends ParentModel
{
    protected $table = 'companies';

    protected $fillable = [
        'name',
    ];
}
