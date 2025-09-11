<?php

namespace App\Containers\AppSection\Trips\Models;

use App\Ship\Parents\Models\Model as ParentModel;

final class Trips extends ParentModel
{
    protected $table = 'trips';

    protected $fillable = [
        'company_id',
        'driver_id',
        'vehicle_id',
        'start_time',
        'end_time',
        'status',
    ];

    public function company()
    {
        return $this->belongsTo(\App\Containers\AppSection\Companies\Models\Companies::class, 'company_id');
    }

    public function driver()
    {
        return $this->belongsTo(\App\Containers\AppSection\Drivers\Models\Drivers::class, 'driver_id');
    }

    public function vehicle()
    {
        return $this->belongsTo(\App\Containers\AppSection\Vehicles\Models\Vehicles::class, 'vehicle_id');
    }
    public function trips()
{
    return $this->hasMany(\App\Containers\AppSection\Trips\Models\Trips::class, 'vehicle_id');
}
}
