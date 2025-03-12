<?php

use App\Http\Controllers\CloudCredentialsController;
use App\Http\Controllers\DriversController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JWTAuthController;
use App\Http\Controllers\StoreEntitiesController;
use App\Http\Controllers\UserCloudsController;
use App\Http\Middleware\JwtMiddleware;

Route::post('register', [JWTAuthController::class, 'register']);
Route::post('login', [JWTAuthController::class, 'login']);

Route::middleware([JwtMiddleware::class])->group(function () {
    Route::get('user', [JWTAuthController::class, 'getUser']);
    Route::post('logout', [JWTAuthController::class, 'logout']);

    Route::resource('cloud-credentials', CloudCredentialsController::class);
    Route::resource('user-clouds', UserCloudsController::class);
    
    Route::resource('drivers', DriversController::class);
    Route::resource('drivers.entities', StoreEntitiesController::class);
});
