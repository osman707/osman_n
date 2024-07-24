<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('', [HomeController::class, 'index'])->name('home');

Route::controller(JobController::class)
    ->prefix('jobs')
    ->name('jobs.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('/{id}', 'show')->name('show')->where('id', '[0-9]+');
    });
