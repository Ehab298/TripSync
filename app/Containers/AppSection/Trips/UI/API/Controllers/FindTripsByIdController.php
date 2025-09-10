<?php

namespace App\Containers\AppSection\Trips\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Trips\Actions\FindTripsByIdAction;
use App\Containers\AppSection\Trips\UI\API\Requests\FindTripsByIdRequest;
use App\Containers\AppSection\Trips\UI\API\Transformers\TripsTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class FindTripsByIdController extends ApiController
{
    public function __invoke(FindTripsByIdRequest $request, FindTripsByIdAction $action): JsonResponse
    {
        $trips = $action->run($request);

        return Response::create($trips, TripsTransformer::class)->ok();
    }
}
