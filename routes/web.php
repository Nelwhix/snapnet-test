<?php

use App\Http\Controllers\CitizenController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', [CitizenController::class, 'create']);
Route::post('/create', [CitizenController::class, 'store']);
Route::get('/home', [CitizenController::class, 'index']);
Route::get('/citizens/{citizen}', [CitizenController::class, 'show']);
