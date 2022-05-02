<?php

use App\Http\Controllers\Api\PaisController;
use App\Http\Controllers\Api\UserController;
use App\Http\Resources\PaisResource;
use App\Http\Resources\UserCollectionResource;
use App\Http\Resources\UserResource;
use App\Models\Pais;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/users', UserController::class)->names([
    'index' => 'api.users.index',
    'show' => 'api.users.show',
    'store' => 'api.users.store',
    'update' => 'api.users.update',
    'destroy' => 'api.users.destroy',
]);

Route::apiResource('/paises', PaisController::class)->names([
    'index' => 'api.paises.index',
    'show' => 'api.paises.show',
    'store' => 'api.paises.store',
    'update' => 'api.paises.update',
    'destroy' => 'api.paises.destroy',
])->parameters([
    'paises' => 'pais'
]);
