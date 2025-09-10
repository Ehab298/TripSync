<?php

namespace App\Filament\Resources\TripsResource\Pages;

use App\Filament\Resources\TripsResource;
use App\Providers\Filament\Components\TripOverlapService;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Carbon;
use Illuminate\Validation\ValidationException;

class CreateTrips extends CreateRecord
{
    protected static string $resource = TripsResource::class;

    /**
     * Mutate form data before creating the DB record.
     *
     * We:
     *  - parse and force hour precision (remove minutes)
     *  - validate start >= now (hour)
     *  - validate end > start
     *  - run overlap check (using integer timestamps)
     */
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $start = Carbon::parse($data['start_time'])->startOfHour();
        $end   = Carbon::parse($data['end_time'])->startOfHour();

        TripOverlapService::validate(
            (int) $data['driver_id'],
            (int) $data['vehicle_id'],
            (int) $start->timestamp,
            (int) $end->timestamp,
            null
        );

        $data['start_time'] = $start->toDateTimeString();
        $data['end_time']   = $end->toDateTimeString();

        return $data;
    }
}
