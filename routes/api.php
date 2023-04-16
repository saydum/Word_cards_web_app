<?php

use App\Http\Controllers\Api\V1\Auth\AuthController;
use App\Http\Controllers\Api\V1\CardController;
use App\Http\Controllers\Api\V1\ExampleController;
use App\Http\Controllers\Api\V1\WordController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
});

Route::group(['middleware' => 'auth:api'], function() {
    Route::resource('cards-api', CardController::class);
    Route::resource('words-api', WordController::class);
    Route::resource('examples-api', ExampleController::class);
});
