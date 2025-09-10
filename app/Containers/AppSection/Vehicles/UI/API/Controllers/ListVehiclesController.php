<?php

namespace App\Containers\AppSection\Vehicles\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Vehicles\Actions\ListVehiclesAction;
use App\Containers\AppSection\Vehicles\UI\API\Requests\ListVehiclesRequest;
use App\Containers\AppSection\Vehicles\UI\API\Transformers\VehiclesTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class ListVehiclesController extends ApiController
{
    public function __invoke(ListVehiclesRequest $request, ListVehiclesAction $action): JsonResponse
    {
        $vehicles = $action->run($request);

        return Response::create($vehicles, VehiclesTransformer::class)->ok();
    }
}
