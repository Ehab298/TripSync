<?php

/**
 * @apiGroup           Companies
 * @apiName            Update
 *
 * @api                {PATCH} /v1/companies/:id Invoke
 * @apiDescription     Endpoint description here...
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated ['permissions' => '', 'roles' => '']
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiParam           {String} parameters here...
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 200 OK
 * {
 *     // Insert the response of the request here...
 * }
 */

use App\Containers\AppSection\Companies\UI\API\Controllers\UpdateCompaniesController;
use Illuminate\Support\Facades\Route;

Route::patch('companies/{id}', UpdateCompaniesController::class)
    ->middleware(['auth:api']);

