<?php

namespace App\Containers\AppSection\Drivers\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Drivers\Actions\DeleteDriversAction;
use App\Containers\AppSection\Drivers\UI\API\Requests\DeleteDriversRequest;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class DeleteDriversController extends ApiController
{
    public function __invoke(DeleteDriversRequest $request, DeleteDriversAction $action): JsonResponse
    {
        $action->run($request);

        return Response::noContent();
    }
}
