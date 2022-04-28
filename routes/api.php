<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Resources\UserResource;

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
        ->orderBy('name')
        ->paginate($request->per_page)
        ->onEachSide(0);

    return UserResource::collection($users);
})->name('api.users.index');
