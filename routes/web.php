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
//        Route::post('/jobs', [JobController::class, 'create']);
        Route::get('create', 'create')->name('create');
        Route::post('', 'store')->name('store');
        Route::get('/{id}', 'show')->name('show')->where('id', '[0-9]+');
    });
