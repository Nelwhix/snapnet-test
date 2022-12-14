<?php

use App\Http\Controllers\UserController;
use App\Models\Citizen;
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

Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/citizens', function () {
        return Citizen::all();
    });
    Route::post('/logout', [UserController::class, 'logout']);
});


Route::post('/register', [UserController::class, 'store']);
Route::post('/login', [UserController::class, 'login']);
