<?php

namespace App\Filament\Resources;

use App\Containers\AppSection\Trips\Models\Trips;
use App\Filament\Resources\TripsResource\Pages;
use App\Filament\Resources\TripsResource\Pages\SchemaTrips;
use App\Filament\Resources\TripsResource\Pages\TableTrips;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;

class TripsResource extends Resource
{
    protected static ?string $model = Trips::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    public static function form(Form $form): Form
    {
        return $form->schema(
            SchemaTrips::getSchema()
        );
    }

    public static function table(Table $table): Table
    {
        return TableTrips::getTableSchema($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTrips::route('/'),
            'create' => Pages\CreateTrips::route('/create'),
        ];
    }
}
