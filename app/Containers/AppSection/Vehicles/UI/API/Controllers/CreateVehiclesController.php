<?php

namespace App\Containers\AppSection\Vehicles\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Vehicles\Actions\CreateVehiclesAction;
use App\Containers\AppSection\Vehicles\UI\API\Requests\CreateVehiclesRequest;
use App\Containers\AppSection\Vehicles\UI\API\Transformers\VehiclesTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class CreateVehiclesController extends ApiController
{
    public function __invoke(CreateVehiclesRequest $request, CreateVehiclesAction $action): JsonResponse
    {
        $vehicles = $action->run($request);

        return Response::create($vehicles, VehiclesTransformer::class)->created();
    }
}
