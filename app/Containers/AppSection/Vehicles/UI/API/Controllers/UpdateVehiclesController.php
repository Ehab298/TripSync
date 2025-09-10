<?php

namespace App\Containers\AppSection\Vehicles\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Vehicles\Actions\UpdateVehiclesAction;
use App\Containers\AppSection\Vehicles\UI\API\Requests\UpdateVehiclesRequest;
use App\Containers\AppSection\Vehicles\UI\API\Transformers\VehiclesTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class UpdateVehiclesController extends ApiController
{
    public function __invoke(UpdateVehiclesRequest $request, UpdateVehiclesAction $action): JsonResponse
    {
        $vehicles = $action->run($request);

        return Response::create($vehicles, VehiclesTransformer::class)->ok();
    }
}
