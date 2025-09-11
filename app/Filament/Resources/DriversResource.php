<?php

namespace App\Filament\Resources;

use App\Containers\AppSection\Drivers\Models\Drivers;
use App\Filament\Resources\DriversResource\Pages;
use App\Filament\Resources\DriversResource\Pages\SchemaDrivers;
use App\Filament\Resources\DriversResource\Pages\TableDrivers;
use App\Filament\Resources\DriversResource\RelationManagers;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DriversResource extends Resource
{
    protected static ?string $model = Drivers::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(SchemaDrivers::getSchema());
    }

    public static function table(Table $table): Table
    {
        return TableDrivers::getTableSchema($table);

    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDrivers::route('/'),
            'create' => Pages\CreateDrivers::route('/create'),
            'edit' => Pages\EditDrivers::route('/{record}/edit'),
        ];
    }
}
