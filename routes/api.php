<?php

use App\Enums\GenderEnum;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Api\StationController;
use App\Http\Controllers\Api\User\AuthUserController;
use App\Http\Controllers\Api\VehicleController;
use App\Http\Controllers\EnumController;
use App\Http\Controllers\OptionController;
use App\Models\Admin;
use App\Models\Brand;
use App\Models\City;
use App\Models\Image;
use App\Models\Location;
use App\Models\Station;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use NunoMaduro\Collision\Adapters\Phpunit\State;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;

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

Route::prefix('/options')
    ->controller(OptionController::class)
    ->group(function () {
        Route::get('/admin-statuses', 'adminStatuses');
        Route::get('/admin-roles', 'adminRoles');
        Route::get('/genders', 'genders');
        Route::get('/stations', 'stations');
        Route::get('/brands', 'brands');
        Route::get('/seating-capacities', 'seatingCapacities');
        Route::get('/vehicle-statuses', 'vehicleStatuses');
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
        Route::get('/', 'index');
        Route::get('/page', 'page');
        Route::get('/all', 'all');

        Route::middleware('abilities:superAdmin')
            ->group(function () {
                Route::post('/store', 'store');
                Route::put('/update/{admin}', 'update');
                Route::delete('/destroy/{admin}', 'destroy');
            });
    });

Route::prefix('/stations')
    ->controller(StationController::class)
    ->group(function () {
        Route::get('/', 'index');
        Route::get('/page', 'page');
        Route::get('/all', 'all');

        Route::middleware(['auth:sanctum', 'abilities:superAdmin'])
            ->group(function () {
                Route::post('/store', 'store');
                Route::put('/update/{station}', 'update');
                Route::delete('/destroy/{station}', 'destroy');
            });
    });

Route::prefix('/vehicles')
    ->controller(VehicleController::class)
    ->group(function () {
        Route::get('/', 'index');
        Route::get('/page', 'page');
        Route::get('/all', 'all');

        Route::middleware(['auth:sanctum', 'abilities:superAdmin'])
            ->group(function () {
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
    // $image = Image::first()->makeVisible([
    //     'created_at',
    //     'updated_at',
    // ]);
    // return $image;

    return Admin::first()->gender;
});
