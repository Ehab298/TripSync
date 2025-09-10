<?php

namespace App\Containers\AppSection\Drivers\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Drivers\Actions\UpdateDriversAction;
use App\Containers\AppSection\Drivers\UI\API\Requests\UpdateDriversRequest;
use App\Containers\AppSection\Drivers\UI\API\Transformers\DriversTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class UpdateDriversController extends ApiController
{
    public function __invoke(UpdateDriversRequest $request, UpdateDriversAction $action): JsonResponse
    {
        $drivers = $action->run($request);

        return Response::create($drivers, DriversTransformer::class)->ok();
    }
}
