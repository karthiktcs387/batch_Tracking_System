<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::get('/', function () {
    return view('upload');
});

Route::post('/', [JobController::class, 'upload']);
Route::get('/jobs', [JobController::class, 'index']);
Route::get('/delete/{id}', [JobController::class, 'delete']);
Route::get('/complete/{id}', [JobController::class, 'complete']);