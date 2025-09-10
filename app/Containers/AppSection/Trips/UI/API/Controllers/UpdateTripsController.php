<?php

namespace App\Containers\AppSection\Trips\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Trips\Actions\UpdateTripsAction;
use App\Containers\AppSection\Trips\UI\API\Requests\UpdateTripsRequest;
use App\Containers\AppSection\Trips\UI\API\Transformers\TripsTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class UpdateTripsController extends ApiController
{
    public function __invoke(UpdateTripsRequest $request, UpdateTripsAction $action): JsonResponse
    {
        $trips = $action->run($request);

        return Response::create($trips, TripsTransformer::class)->ok();
    }
}
