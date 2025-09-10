<?php

namespace App\Filament\Resources\TripsResource\Pages;

use Filament\Forms;
use App\Containers\AppSection\Drivers\Models\Drivers;
use App\Containers\AppSection\Vehicles\Models\Vehicles;
use App\Containers\AppSection\Companies\Models\Companies;
use App\Containers\AppSection\Trips\Models\Trips;
use Illuminate\Validation\ValidationException;

class SchemaTrips
{
    public static function getSchema(): array
    {
        return [
            Forms\Components\Select::make('company_id')
                ->label('Company')
                ->options(Companies::query()->pluck('name', 'id')->toArray())
                ->searchable()
                ->required(),

            Forms\Components\Select::make('driver_id')
                ->label('Driver')
                ->options(Drivers::query()->pluck('name', 'id')->toArray())
                ->searchable()
                ->required(),

            Forms\Components\Select::make('vehicle_id')
                ->label('Vehicle')
                ->options(Vehicles::query()->pluck('plate_number', 'id')->toArray())
                ->searchable()
                ->required(),

            Forms\Components\DatePicker::make('start_time')
                ->label('Start Time')
                ->required()
                ->minDate(now())   
                ->native(false),   

            Forms\Components\DatePicker::make('end_time')
                ->label('End Time')
                ->required()
                ->minDate(now())   
                ->after('start_time') 
                ->native(false),


        ];
    }

}
