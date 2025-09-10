<?php

namespace App\Containers\AppSection\Vehicles\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Vehicles\Actions\DeleteVehiclesAction;
use App\Containers\AppSection\Vehicles\UI\API\Requests\DeleteVehiclesRequest;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class DeleteVehiclesController extends ApiController
{
    public function __invoke(DeleteVehiclesRequest $request, DeleteVehiclesAction $action): JsonResponse
    {
        $action->run($request);

        return Response::noContent();
    }
}
