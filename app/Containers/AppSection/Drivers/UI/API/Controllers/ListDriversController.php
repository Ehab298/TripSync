<?php

namespace App\Containers\AppSection\Drivers\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Drivers\Actions\ListDriversAction;
use App\Containers\AppSection\Drivers\UI\API\Requests\ListDriversRequest;
use App\Containers\AppSection\Drivers\UI\API\Transformers\DriversTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class ListDriversController extends ApiController
{
    public function __invoke(ListDriversRequest $request, ListDriversAction $action): JsonResponse
    {
        $drivers = $action->run($request);

        return Response::create($drivers, DriversTransformer::class)->ok();
    }
}
