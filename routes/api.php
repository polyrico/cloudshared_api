<?php

use App\Http\Controllers\CloudCredentialsController;
use App\Http\Controllers\DriversController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JWTAuthController;
use App\Http\Controllers\PartitionsController;
use App\Http\Controllers\StoreEntitiesController;
use App\Http\Controllers\UserCloudsController;
use App\Http\Middleware\JwtMiddleware;

Route::post('register', [JWTAuthController::class, 'register']);
Route::post('login', [JWTAuthController::class, 'login']);

Route::middleware([JwtMiddleware::class])->group(function () {
    Route::get('user', [JWTAuthController::class, 'getUser']);
    Route::post('logout', [JWTAuthController::class, 'logout']);

    Route::apiResources([
        'clouds' =>  UserCloudsController::class,
        'drivers' => DriversController::class,
        'drivers.entities' => StoreEntitiesController::class,
    ]);

    Route::resource('drivers.entities.partitions', PartitionsController::class)->only([
        'index', 'show'
    ]);

    // Admin routes
    Route::resource('cloud-credentials', CloudCredentialsController::class);
});
