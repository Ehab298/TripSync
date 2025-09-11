<x-filament::page>
    <form wire:submit.prevent="checkAvailability" class="space-y-4">
        {{ $this->form }}
        <x-filament::button type="submit">
            Check Availability
        </x-filament::button>
    </form>

    @if(!empty($availableVehicles) || !empty($availableDrivers))
        <div class="mt-6 grid grid-cols-2 gap-6">
            <div>
                <h2 class="text-lg font-bold mb-2">Available Vehicles</h2>
                <ul class="list-disc ml-5">
                    @foreach($availableVehicles as $vehicle)
                        <li>{{ $vehicle->model }} - {{ $vehicle->plate_number }}</li>
                    @endforeach
                </ul>
            </div>
            <div>
                <h2 class="text-lg font-bold mb-2">Available Drivers</h2>
                <ul class="list-disc ml-5">
                    @foreach($availableDrivers as $driver)
                        <li>{{ $driver->name }} - License: {{ $driver->license_number }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
</x-filament::page>
