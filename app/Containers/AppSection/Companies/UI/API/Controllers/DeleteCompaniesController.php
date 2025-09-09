<?php

namespace App\Containers\AppSection\Companies\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Companies\Actions\DeleteCompaniesAction;
use App\Containers\AppSection\Companies\UI\API\Requests\DeleteCompaniesRequest;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class DeleteCompaniesController extends ApiController
{
    public function __invoke(DeleteCompaniesRequest $request, DeleteCompaniesAction $action): JsonResponse
    {
        $action->run($request);

        return Response::noContent();
    }
}
