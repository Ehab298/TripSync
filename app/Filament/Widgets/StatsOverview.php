<?php

namespace App\Filament\Widgets;

use App\Containers\AppSection\Drivers\Models\Drivers;
use App\Containers\AppSection\Trips\Models\Trips;
use App\Containers\AppSection\Vehicles\Models\Vehicles;
use Carbon\Carbon;
use EightyNine\FilamentAdvancedWidget\AdvancedStatsOverviewWidget as BaseWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use EightyNine\FilamentAdvancedWidget\AdvancedStatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    use InteractsWithPageFilters;

    protected static ?int $sort = 0;

    public function getHeading(): ?string
    {
        return 'Trip KPIs';
    }

    protected function getColumns(): int
    {
        return 2;
    }

    protected function getStats(): array
    {
        // KPIs
        $activeTrips = Trips::where('status', 'active')->count();

        $busyDrivers = Trips::where('status', 'active')->pluck('driver_id')->unique();
        $availableDrivers = Drivers::whereNotIn('id', $busyDrivers)->count();

        $busyVehicles = Trips::where('status', 'active')->pluck('vehicle_id')->unique();
        $availableVehicles = Vehicles::whereNotIn('id', $busyVehicles)->count();

        $completedThisMonth = Trips::where('status', 'completed')
            ->whereMonth('end_time', Carbon::now()->month)
            ->whereYear('end_time', Carbon::now()->year)
            ->count();

        return [
            Stat::make('Active Trips', $activeTrips)
                ->icon('heroicon-o-truck')
                ->iconBackgroundColor('info')
                ->description('Currently ongoing trips')
                ->descriptionColor('info'),

            Stat::make('Available Drivers', $availableDrivers)
                ->icon('heroicon-o-user-group')
                ->description('Drivers not on active trips')
                ->iconBackgroundColor('success')
                ->descriptionColor('success'),

            Stat::make('Available Vehicles', $availableVehicles)
                ->icon('heroicon-o-truck')
                ->description('Vehicles not in use')
                ->iconBackgroundColor('warning')
                ->descriptionColor('warning'),

            Stat::make('Trips Completed This Month', $completedThisMonth)
                ->icon('heroicon-o-check-circle')
                ->description('Finished trips this month')
                ->iconBackgroundColor('primary')
                ->descriptionColor('primary'),
        ];
    }
}
