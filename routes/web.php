<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {
    $faker = (new \Faker\Factory())::create();
    $faker->addProvider(new \Faker\Provider\Fakecar($faker));
    return \App\Models\Admin::where('role', '<>', 0)->pluck('id');
});