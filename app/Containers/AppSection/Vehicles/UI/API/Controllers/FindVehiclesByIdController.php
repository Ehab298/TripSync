<?php

namespace App\Containers\AppSection\Vehicles\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Vehicles\Actions\FindVehiclesByIdAction;
use App\Containers\AppSection\Vehicles\UI\API\Requests\FindVehiclesByIdRequest;
use App\Containers\AppSection\Vehicles\UI\API\Transformers\VehiclesTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class FindVehiclesByIdController extends ApiController
{
    public function __invoke(FindVehiclesByIdRequest $request, FindVehiclesByIdAction $action): JsonResponse
    {
        $vehicles = $action->run($request);

        return Response::create($vehicles, VehiclesTransformer::class)->ok();
    }
}
