<?php

namespace App\Containers\AppSection\Companies\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Companies\Actions\ListCompaniesAction;
use App\Containers\AppSection\Companies\UI\API\Requests\ListCompaniesRequest;
use App\Containers\AppSection\Companies\UI\API\Transformers\CompaniesTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class ListCompaniesController extends ApiController
{
    public function __invoke(ListCompaniesRequest $request, ListCompaniesAction $action): JsonResponse
    {
        $companies = $action->run($request);

        return Response::create($companies, CompaniesTransformer::class)->ok();
    }
}
