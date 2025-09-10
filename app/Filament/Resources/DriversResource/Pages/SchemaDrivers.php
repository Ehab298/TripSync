<?php

namespace App\Filament\Resources\DriversResource\Pages;
use Filament\Forms;

class  SchemaDrivers {

    public static function getschema(){
        return [
            
            Forms\Components\Select::make('company_id')
                ->label('Company')
                ->relationship('company', 'name')
                ->searchable()
                ->preload()
                ->required(),
            Forms\Components\TextInput::make('name')
                ->label('Driver Name')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('license_number')
                ->label('License Number')
                ->required()
                ->maxLength(255)
                ->unique(ignoreRecord: true),
        ];
    }   

}