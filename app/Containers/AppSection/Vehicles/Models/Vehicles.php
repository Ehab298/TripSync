<?php

namespace App\Containers\AppSection\Vehicles\Models;

use App\Ship\Parents\Models\Model as ParentModel;

final class Vehicles extends ParentModel
{
    protected $table = 'vehicles';

    protected $fillable = [
        'company_id',
        'plate_number',
        'model',
    ];

    public function company()
    {
        return $this->belongsTo(\App\Containers\AppSection\Companies\Models\Companies::class, 'company_id');
    }
}
