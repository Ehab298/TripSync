<?php

namespace App\Containers\AppSection\Drivers\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Drivers\Actions\FindDriversByIdAction;
use App\Containers\AppSection\Drivers\UI\API\Requests\FindDriversByIdRequest;
use App\Containers\AppSection\Drivers\UI\API\Transformers\DriversTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class FindDriversByIdController extends ApiController
{
    public function __invoke(FindDriversByIdRequest $request, FindDriversByIdAction $action): JsonResponse
    {
        $drivers = $action->run($request);

        return Response::create($drivers, DriversTransformer::class)->ok();
    }
}
