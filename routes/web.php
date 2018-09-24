<?php

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

Route::namespace('Client')->group(function(){
    Route::resource('/', 'TripsController');
});

Auth::routes();

Route::middleware('auth')->namespace('Admin')->prefix('admin')->as('admin.')->group(function(){
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('/cities', 'CitiesController');
    Route::resource('/trips', 'TripsController');
});
