<?php

use App\Http\Controllers\Api\V1\CardController;
use App\Http\Controllers\Api\V1\ExampleController;
use App\Http\Controllers\Api\V1\WordController;
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
Route::resource('cards', CardController::class);
Route::resource('words', WordController::class);
Route::resource('examples', ExampleController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
