<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Api\StationController;
use App\Http\Controllers\Api\User\AuthUserController;
use App\Http\Controllers\Api\VehicleController;
use App\Http\Controllers\EnumController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Enum

Route::prefix('/enum')
->controller(EnumController::class)
->group(function () {
    // Route::get('/administrative', 'administrative');
    Route::get('/cities', 'cities');
    Route::get('/districts', 'districts');
    Route::get('/subdistricts', 'subdistricts');
});

// Admin

Route::prefix('/admin')
    ->controller(App\Http\Controllers\Admin\AuthController::class)
    ->group(function () {
        Route::post('/login', 'login')->name('login');
    });

Route::prefix('/admin')
    ->controller(App\Http\Controllers\Admin\AuthController::class)
    ->middleware(['auth:sanctum', 'abilities:superAdmin'])
    ->group(function () {
        Route::get('/me', 'me');
    });


Route::prefix('/admins')
    ->controller(AdminController::class)
    ->middleware(['auth:sanctum', 'ability:admin,superAdmin'])
    ->group(function () {
        Route::get('/get', 'get');

        Route::middleware('abilities:superAdmin')
            ->group(function () {
                Route::post('/store', 'store');
                Route::put('/update', 'update');
                Route::delete('/destroy/{admin}', 'destroy');
            });
    });

Route::prefix('/stations')
    ->controller(StationController::class)
    ->group(function () {
        Route::get('/get', 'get');

        Route::middleware(['auth:sanctum', 'abilities:superAdmin'])
            ->group(function () {
                Route::get('/getall', 'getAll');
                Route::post('/store', 'store');
                Route::put('/update/{station}', 'update');
                Route::delete('/destroy/{station}', 'destroy');
            });
    });

Route::prefix('/vehicles')
    ->controller(VehicleController::class)
    ->group(function () {
        Route::get('/get', 'get');

        Route::middleware(['auth:sanctum', 'abilities:superAdmin'])
            ->group(function () {
                Route::get('/getall', 'getAll');
                Route::post('/store', 'store');
                Route::put('/update', 'update');
                Route::delete('/destroy/{vehicle}', 'destroy');
            });
    });

// ---------------- Auth User ---------------------------
Route::prefix('/user')
    ->controller(AuthUserController::class)
    ->group(function ($router) {
        Route::post('/login',  'login');
        Route::post('/register', 'register');
    });
Route::prefix('/user')
    ->controller(AuthUserController::class)
    ->middleware(['auth:sanctum'])
    ->group(function ($router) {
        Route::post('/logout', 'logout');
        Route::post('/refresh', 'refresh');
        Route::get('/me', 'me');
        Route::post('/change-pass', 'changePassWord');
    });


    Route::get('/test', function () {
    });
