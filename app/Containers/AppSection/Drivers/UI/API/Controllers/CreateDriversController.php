<?php

namespace App\Containers\AppSection\Drivers\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Drivers\Actions\CreateDriversAction;
use App\Containers\AppSection\Drivers\UI\API\Requests\CreateDriversRequest;
use App\Containers\AppSection\Drivers\UI\API\Transformers\DriversTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class CreateDriversController extends ApiController
{
    public function __invoke(CreateDriversRequest $request, CreateDriversAction $action): JsonResponse
    {
        $drivers = $action->run($request);

        return Response::create($drivers, DriversTransformer::class)->created();
    }
}
