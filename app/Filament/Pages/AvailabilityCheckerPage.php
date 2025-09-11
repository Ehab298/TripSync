<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use App\Containers\AppSection\Vehicles\Models\Vehicles;
use App\Containers\AppSection\Drivers\Models\Drivers;
use App\Containers\AppSection\Trips\Models\Trips;
use Illuminate\Database\Eloquent\Builder;

class AvailabilityCheckerPage extends Page
{
    protected static ?string $title = 'Availability Checker';
    protected static ?string $slug = 'availability-checker';
    protected static ?string $navigationLabel = 'Availability Checker';
    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    protected static string $view = 'filament.pages.availability-checker-page';

    public $start_time;
    public $end_time;

    public $availableDrivers = [];
    public $availableVehicles = [];

    protected function getFormSchema(): array
    {
        return [
            DateTimePicker::make('start_time')
                ->label('Start Time')
                ->required(),
            DateTimePicker::make('end_time')
                ->label('End Time')
                ->required(),
        ];
    }

    public function checkAvailability()
    {
        $start = $this->start_time;
        $end = $this->end_time;

        if (!$start || !$end) {
            $this->availableDrivers = [];
            $this->availableVehicles = [];
            return;
        }

        $this->availableVehicles = Vehicles::whereDoesntHave('trips', function (Builder $query) use ($start, $end) {
            $query->where(function ($q) use ($start, $end) {
                $q->whereBetween('start_time', [$start, $end])
                  ->orWhereBetween('end_time', [$start, $end])
                  ->orWhere(function ($q2) use ($start, $end) {
                      $q2->where('start_time', '<=', $start)
                         ->where('end_time', '>=', $end);
                  });
            })->where('status', '!=', 'cancelled');
        })->get();

        $this->availableDrivers = Drivers::whereDoesntHave('trips', function (Builder $query) use ($start, $end) {
            $query->where(function ($q) use ($start, $end) {
                $q->whereBetween('start_time', [$start, $end])
                  ->orWhereBetween('end_time', [$start, $end])
                  ->orWhere(function ($q2) use ($start, $end) {
                      $q2->where('start_time', '<=', $start)
                         ->where('end_time', '>=', $end);
                  });
            })->where('status', '!=', 'cancelled');
        })->get();
    }
}
