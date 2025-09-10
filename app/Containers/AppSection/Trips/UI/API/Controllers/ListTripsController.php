<?php

namespace App\Containers\AppSection\Trips\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Trips\Actions\ListTripsAction;
use App\Containers\AppSection\Trips\UI\API\Requests\ListTripsRequest;
use App\Containers\AppSection\Trips\UI\API\Transformers\TripsTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class ListTripsController extends ApiController
{
    public function __invoke(ListTripsRequest $request, ListTripsAction $action): JsonResponse
    {
        $trips = $action->run($request);

        return Response::create($trips, TripsTransformer::class)->ok();
    }
}
