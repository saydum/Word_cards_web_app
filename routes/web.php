<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WordController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::middleware(['auth'])->group(function () {
    Route::resource('cards', CardController::class);
    Route::resource('words', WordController::class);
    Route::resource('example', ExampleController::class);
});

Auth::routes();
