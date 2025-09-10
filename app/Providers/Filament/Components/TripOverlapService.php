<?php

namespace App\Providers\Filament\Components;

use App\Containers\AppSection\Trips\Models\Trips;
use Carbon\Carbon;
use Filament\Notifications\Notification;
use Illuminate\Validation\ValidationException;

class TripOverlapService
{
    public static function validate(
        int $driverId,
        int $vehicleId,
        int $startTs,
        int $endTs,
        ?int $tripId = null
    ): void {
        $start = Carbon::createFromTimestamp($startTs);
        $end   = Carbon::createFromTimestamp($endTs);

        $query = Trips::query()
            ->whereNot('status', 'cancelled') 
            ->where(function ($q) use ($driverId, $vehicleId) {
                $q->where('driver_id', $driverId)
                  ->orWhere('vehicle_id', $vehicleId);
            })
            ->where(function ($q) use ($start, $end) {
                $q->where('start_time', '<', $end->toDateTimeString())
                  ->where('end_time', '>', $start->toDateTimeString());
            });

        if ($tripId) {
            $query->where('id', '!=', $tripId);
        }

        if ($query->exists()) {
            Notification::make()
                ->title('Trip Conflict')
                ->body('The selected driver or vehicle is already booked for the given time range.')
                ->danger()
                ->send();

            throw ValidationException::withMessages([
                'driver_id'  => 'This driver already has a trip during the selected time range.',
                'vehicle_id' => 'This vehicle is already booked during the selected time range.',
            ]);
        }
    }
}
