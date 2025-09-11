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
                ->required()
                ->reactive(), // triggers updates on dependent fields

            Forms\Components\Select::make('driver_id')
                ->label('Driver')
                ->options(function (callable $get) {
                    $companyId = $get('company_id');
                    if (!$companyId) {
                        return [];
                    }

                    return Drivers::where('company_id', $companyId)
                        ->pluck('name', 'id')
                        ->toArray();
                })
                ->required()
                ->searchable(),

            Forms\Components\Select::make('vehicle_id')
                ->label('Vehicle')
                ->options(function (callable $get) {
                    $companyId = $get('company_id');
                    if (!$companyId) {
                        return [];
                    }

                    return Vehicles::where('company_id', $companyId)
                        ->pluck('plate_number', 'id')
                        ->toArray();
                })
                ->required()
                ->searchable(),
                
            Forms\Components\DateTimePicker::make('start_time')
                ->label('Start Time')
                ->required()
                ->minDate(now())   ,   

            Forms\Components\DateTimePicker::make('end_time')
                ->label('End Time')
                ->required()
                ->minDate(now())   
                ->after('start_time') ,


        ];
    }

}
