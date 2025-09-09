<?php

namespace App\Containers\AppSection\Companies\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Companies\Actions\CreateCompaniesAction;
use App\Containers\AppSection\Companies\UI\API\Requests\CreateCompaniesRequest;
use App\Containers\AppSection\Companies\UI\API\Transformers\CompaniesTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class CreateCompaniesController extends ApiController
{
    public function __invoke(CreateCompaniesRequest $request, CreateCompaniesAction $action): JsonResponse
    {
        $companies = $action->run($request);

        return Response::create($companies, CompaniesTransformer::class)->created();
    }
}
