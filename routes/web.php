<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. No create something great!
|
*/

Auth::routes();
Route::redirect('', 'home');


Route::group(['middleware' => ['auth', 'verified', 'role:superadministrator']], function () {});
Route::get('/home', 'HomeController@index')->middleware('activated')->name('home');

Route::get('/table-datatable', function () {
    return view('helpers/table-datatable');
});

Route::resource('vehicle', 'Vehicle\VehicleController');
Route::get('search', 'Vehicle\VehicleController@search')->name('vehicle.search');
Route::resource('inspection', 'Forms\InspectionController');
Route::get('day/{days}', 'Forms\InspectionController@day')->name('inspection.day');
Route::get('form', 'Forms\InspectionController@form')->name('inspection.form');
Route::view('help', 'others.help')->name('others.help');
Route::fallback(function() {
 return view('errors.404');
});
