<?php

namespace App\Filament\Resources;

use App\Containers\AppSection\Companies\Models\Companies;
use App\Filament\Resources\CompaniesResource\Pages;
use App\Filament\Resources\CompaniesResource\RelationManagers;
use App\Providers\Filament\Components\ActionsComponentViewEditeDelete;
use App\Providers\Filament\Components\BulkActionsComponent;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompaniesResource extends Resource
{
    protected static ?string $model = Companies::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               TextInput::make('name')
                   ->required()
                   ->maxLength(100),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime('d-M-Y H:i:s')
                    ->sortable(),
            ])
            ->actions(app(ActionsComponentViewEditeDelete::class)->run())
            ->bulkActions(app(BulkActionsComponent::class)->run());
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
            'index' => Pages\ListCompanies::route('/'),
            'create' => Pages\CreateCompanies::route('/create'),
            'edit' => Pages\EditCompanies::route('/{record}/edit'),
        ];
    }
}
