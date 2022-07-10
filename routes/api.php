<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\EnumController;
use App\Http\Controllers\StationController;
use App\Http\Controllers\VehicleController;
use App\Http\Middleware\ApiAdmin;
use Illuminate\Http\Request;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('/admin')
    ->as('admin.')
    ->controller(App\Http\Controllers\Admin\AuthController::class)
    ->group(function () {
        Route::post('/login', 'login')->name('login');
    });

Route::prefix('/admin')
    ->controller(AdminController::class)
    ->middleware(['auth:sanctum', 'abilities:superAdmin'])
    ->group(function () {
        Route::get('/get', 'get');
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

Route::prefix('/enum')
    ->controller(EnumController::class)
    ->group(function () {
        Route::get('/administrative', 'administrative');
        Route::get('/city', 'city');
        Route::get('/district', 'district');
        Route::get('/subdistrict', 'subdistrict');
    });