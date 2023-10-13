<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\WordController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CardController::class, 'index']);
Route::resource('cards', CardController::class);
Route::resource('words', WordController::class);
Route::resource('example', ExampleController::class);
