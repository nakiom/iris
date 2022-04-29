<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Pais;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserCollectionResource;
use App\Http\Resources\PaisResource;

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

Route::get('/users', function(Request $request) {
    
    $users = User::query()
        ->where('name','like','%'.$request->search.'%')
        ->orWhere('email','like','%'.$request->search.'%')
        ->applySorts($request->sort)
        ->paginate($request->per_page)
        ->onEachSide(0);

    // User::applySorts($request->sort)->get();

    // return UserResource::collection($users);
    return new UserCollectionResource($users);

})->name('api.users.index');

Route::get('/paises', function(Request $request) {
    
    $paises = Pais::query()
        ->with('provincias')
        ->where('nombre','like','%'.$request->search.'%')
        ->orderBy('nombre')
        // ->paginate($request->per_page)
        // ->onEachSide(0);
        ->get();

    return PaisResource::collection($paises);
})->name('api.paises.index');

Route::get('/paises/{pais}', function(Pais $pais) {
    return new PaisResource($pais->load('provincias.distritos.localidades.calles'));
})->name('api.paises.index');
