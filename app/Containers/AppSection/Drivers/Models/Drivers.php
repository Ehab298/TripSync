<?php

namespace App\Containers\AppSection\Drivers\Models;

use App\Ship\Parents\Models\Model as ParentModel;

final class Drivers extends ParentModel
{
    protected $table = 'drivers';
    
    protected $fillable = [
        'company_id',
        'name',
        'license_number',
    ];

    public function company()
    {
        return $this->belongsTo(\App\Containers\AppSection\Companies\Models\Companies::class, 'company_id');
    }
}
