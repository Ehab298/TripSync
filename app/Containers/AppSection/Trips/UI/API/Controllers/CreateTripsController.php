<?php

namespace App\Containers\AppSection\Trips\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Trips\Actions\CreateTripsAction;
use App\Containers\AppSection\Trips\UI\API\Requests\CreateTripsRequest;
use App\Containers\AppSection\Trips\UI\API\Transformers\TripsTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class CreateTripsController extends ApiController
{
    public function __invoke(CreateTripsRequest $request, CreateTripsAction $action): JsonResponse
    {
        $trips = $action->run($request);

        return Response::create($trips, TripsTransformer::class)->created();
    }
}
