<?php

use App\Http\Controllers\Api\User\AuthUserController;
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

// ---------------- Auth User ---------------------------
Route::middleware(['auth:sanctum'])->group(function ($router) {
    Route::post('/user/logout', [AuthUserController::class, 'logout']);
    Route::post('/user/refresh', [AuthUserController::class, 'refresh']);
    Route::post('/user/me', [AuthUserController::class, 'me']);
    Route::post('/user/change-pass', [AuthUserController::class, 'changePassWord']);
});
Route::post('/user/login', [AuthUserController::class, 'login']);
Route::post('/user/register', [AuthUserController::class, 'register']);
