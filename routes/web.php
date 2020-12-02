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

Route::namespace('Dashboard')->middleware(['auth:sanctum', 'verified'])->prefix('dashboard')->group(function (){
    Route::name('dashboard')->group(function () {
        Route::get('/', 'HomeController');
        Route::name('.info')->group(function () {
            Route::post('/{info}', 'InfoController@store')->name('.store');
            Route::get('/create/{info}', 'InfoController@create')->name('.create');
            Route::get('/show/{info}', 'InfoController@show')->name('.show');
        });
    });
});
