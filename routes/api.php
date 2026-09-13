<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Events\EventController;
use App\Http\Controllers\Api\V1\Exhibitors\ExhibitorController;
use App\Http\Controllers\Api\V1\Exhibitors\ExhibitorCategoryController;
use App\Http\Controllers\Api\V1\Manufacturers\ManufacturerController;
use App\Http\Controllers\Api\V1\Vehicles\VehicleController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('v1')->name('api.v1')->group(function() {

    Route::apiResource('events', EventController::class)
    ->only(['index', 'show']);

    Route::apiResource('exhibitors', ExhibitorController::class)
        ->only(['index', 'show']);

    Route::apiResource('exhibitor-categories', ExhibitorCategoryController::class)
        ->only(['index', 'show']);
        
    Route::apiResource('manufacturers', ManufacturerController::class)
        ->only(['index', 'show']);  

    Route::apiResource('vehicles', VehicleController::class)
        ->only(['index', 'show']);  

});

