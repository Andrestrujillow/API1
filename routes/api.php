<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController as ControllersAreaController;
use App\Http\Controllers\ComputerController as ControllersComputerController;
use App\Http\Controllers\TrainingCenterController as ControllersTrainingCenterController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::resource('training_centers', ControllersTrainingCenterController::class);
Route::resource('computers', ControllersComputerController::class);
route::resource('areas', ControllersAreaController::class);
