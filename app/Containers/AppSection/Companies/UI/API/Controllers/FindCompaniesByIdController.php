<?php

namespace App\Containers\AppSection\Companies\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Companies\Actions\FindCompaniesByIdAction;
use App\Containers\AppSection\Companies\UI\API\Requests\FindCompaniesByIdRequest;
use App\Containers\AppSection\Companies\UI\API\Transformers\CompaniesTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class FindCompaniesByIdController extends ApiController
{
    public function __invoke(FindCompaniesByIdRequest $request, FindCompaniesByIdAction $action): JsonResponse
    {
        $companies = $action->run($request);

        return Response::create($companies, CompaniesTransformer::class)->ok();
    }
}
