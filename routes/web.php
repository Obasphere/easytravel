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

Route::get('/', 'BookingsController@getTrips');
Route::get('searchRoutes', 'BookingsController@searchRoutes');
Route::post('booking', 'BookingsController@bookNow');


Auth::routes();

Route::middleware('auth')->namespace('Admin')->prefix('admin')->as('admin.')->group(function(){
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('/cities', 'CitiesController');
    Route::resource('/trips', 'TripsController');
});

Route::get('/about', 'PagesController@about')->name('about');
Route::get('/services', 'PagesController@services')->name('services');

Route::get('admin/secret/login', 'Auth\LoginController@showLoginForm');
