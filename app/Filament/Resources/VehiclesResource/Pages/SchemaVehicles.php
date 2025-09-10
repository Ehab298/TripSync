<?php

namespace App\Filament\Resources\VehiclesResource\Pages;

use Filament\Forms;
use Filament\Forms\Form;

class SchemaVehicles
{
    public static function getSchema(): array
    {
        return [
            Forms\Components\Select::make('company_id')
                ->label('Company')
                ->relationship('company', 'name')
                ->searchable()
                ->preload()
                ->required(),

            Forms\Components\TextInput::make('plate_number')
                ->label('Plate Number')
                ->required()
                ->unique(ignoreRecord: true),

            Forms\Components\TextInput::make('model')
                ->label('Model')
                ->required(),
        ];
    }
}
