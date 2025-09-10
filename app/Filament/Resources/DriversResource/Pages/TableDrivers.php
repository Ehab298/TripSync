<?php

namespace App\Filament\Resources\DriversResource\Pages;

use App\Containers\AppSection\Companies\Models\Companies;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use App\Containers\AppSection\Companies\Models\Company;

class TableDrivers
{
    public static function getTableSchema(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('company.name')
                    ->label('Company')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('name')
                    ->label('Driver Name')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('license_number')
                    ->label('License Number')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime('d-M-Y H:i:s')
                    ->sortable(),
            ])
            ->filters([
                // 🔹 Filter by Company
                SelectFilter::make('company_id')
                    ->label('Company')
                    ->options(
                        Companies::query()->pluck('name', 'id')->toArray()
                    )
                    ->searchable(),

            ]);
    }
}
