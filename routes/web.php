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

// landing page
Route::get('/', 'App\Http\Controllers\LandingPage@index');

Route::group(['prefix' => 'projects'], function() {
    Route::get('/', 'App\Http\Controllers\Projects@index');
    Route::get('/{projectId}', 'App\Http\Controllers\Projects@oneProject');
});

Route::group(['prefix' => 'devs'], function() {
    Route::get('/', 'App\Http\Controllers\Developers@index');
    Route::get('/{userId}', 'App\Http\Controllers\Developers@oneDev');
});
