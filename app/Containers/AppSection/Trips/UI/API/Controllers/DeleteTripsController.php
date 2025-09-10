<?php

namespace App\Containers\AppSection\Trips\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Trips\Actions\DeleteTripsAction;
use App\Containers\AppSection\Trips\UI\API\Requests\DeleteTripsRequest;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class DeleteTripsController extends ApiController
{
    public function __invoke(DeleteTripsRequest $request, DeleteTripsAction $action): JsonResponse
    {
        $action->run($request);

        return Response::noContent();
    }
}
