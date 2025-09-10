<?php

namespace App\Filament\Resources;

use App\Containers\AppSection\Vehicles\Models\Vehicles;
use App\Filament\Resources\VehiclesResource\Pages;
use App\Filament\Resources\VehiclesResource\Pages\SchemaVehicles;
use App\Filament\Resources\VehiclesResource\Pages\TableVehicles;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;

class VehiclesResource extends Resource
{
    protected static ?string $model = Vehicles::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema(
            SchemaVehicles::getSchema()
        );
    }

    public static function table(Table $table): Table
    {
        return TableVehicles::getTableSchema($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVehicles::route('/'),
            'create' => Pages\CreateVehicles::route('/create'),
            'edit' => Pages\EditVehicles::route('/{record}/edit'),
        ];
    }
}
