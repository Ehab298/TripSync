<?php

namespace App\Filament\Resources\TripsResource\Pages;

use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use App\Containers\AppSection\Companies\Models\Companies;
use App\Containers\AppSection\Drivers\Models\Drivers;
use App\Containers\AppSection\Vehicles\Models\Vehicles;
use App\Providers\Filament\Components\ActionsComponentUpdateStatus;
use App\Providers\Filament\Components\ActionsComponentViewEditeDelete;
use App\Providers\Filament\Components\BulkActionsComponent;

class TableTrips
{
    public static function getTableSchema(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('company.name')
                    ->label('Company')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('driver.name')
                    ->label('Driver')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('vehicle.plate_number')
                    ->label('Vehicle')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('start_time')
                    ->label('Start Time')
                    ->dateTime('d-M-Y H:i'),

                TextColumn::make('end_time')
                    ->label('End Time')
                    ->dateTime('d-M-Y H:i'),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->colors([
                        'info' => 'scheduled',
                        'primary' => 'active',
                        'success' => 'completed',
                        'danger' => 'cancelled',
                    ]),
            ])
            ->filters([
                SelectFilter::make('company_id')
                    ->label('Company')
                    ->options(Companies::query()->pluck('name', 'id')->toArray()),

                SelectFilter::make('driver_id')
                    ->label('Driver')
                    ->options(Drivers::query()->pluck('name', 'id')->toArray()),

                SelectFilter::make('vehicle_id')
                    ->label('Vehicle')
                    ->options(Vehicles::query()->pluck('plate_number', 'id')->toArray()),

                SelectFilter::make('status')
                    ->options([
                        'scheduled' => 'Scheduled',
                        'active' => 'Active',
                        'completed' => 'Completed',
                        'cancelled' => 'Cancelled',
                    ]),
            ])
            ->actions(app(ActionsComponentUpdateStatus::class)->run())
            ->bulkActions(app(BulkActionsComponent::class)->run());
    }
}
