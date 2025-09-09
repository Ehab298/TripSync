<?php

namespace App\Containers\AppSection\Companies\UI\API\Controllers;

use Apiato\Support\Facades\Response;
use App\Containers\AppSection\Companies\Actions\UpdateCompaniesAction;
use App\Containers\AppSection\Companies\UI\API\Requests\UpdateCompaniesRequest;
use App\Containers\AppSection\Companies\UI\API\Transformers\CompaniesTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

final class UpdateCompaniesController extends ApiController
{
    public function __invoke(UpdateCompaniesRequest $request, UpdateCompaniesAction $action): JsonResponse
    {
        $companies = $action->run($request);

        return Response::create($companies, CompaniesTransformer::class)->ok();
    }
}
