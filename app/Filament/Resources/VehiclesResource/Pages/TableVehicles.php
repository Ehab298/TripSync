<?php

namespace App\Filament\Resources\VehiclesResource\Pages;

use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use App\Containers\AppSection\Companies\Models\Companies;
use App\Providers\Filament\Components\ActionsComponentViewEditeDelete;
use App\Providers\Filament\Components\BulkActionsComponent;

class TableVehicles
{
    public static function getTableSchema(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('company.name')
                    ->label('Company')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('plate_number')
                    ->label('Plate Number')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('model')
                    ->label('Model')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime('d-M-Y H:i:s')
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('company_id')
                    ->label('Company')
                    ->options(
                        Companies::query()->pluck('name', 'id')->toArray()
                    )
                    ->searchable(),
            ])
            ->actions(app(ActionsComponentViewEditeDelete::class)->run())
            ->bulkActions(app(BulkActionsComponent::class)->run());
    }
}
