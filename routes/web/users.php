<?php

Route::group(['middleware' => ['auth', 'verified']], function () {
	Route::prefix('users')->name('users.')->group(function() {
		Route::put('approve/{user}', 'Users\AdminController@approveAdmin')->name('approve');
		Route::put('reject/{user}', 'Users\AdminController@rejectAdmin')->name('reject');
    	Route::get('request', 'Users\UserController@requestList')->name('request');
    	Route::resource('/', 'Users\UserController');

	});
    Route::post('userStatus', 'Users\UserController@userStatus')->name('users.status');
    Route::resource('administrators', 'Users\AdminController');
   
    Route::prefix('workshops')->name('workshops.')->group(function () {
	    Route::get('request', 'Users\WorkshopController@requestList')->name('request');
	    Route::put('approve/{workshop}', 'Users\WorkshopController@approveWorkshop')->name('approve');
	    Route::put('reject/{workshop}', 'Users\WorkshopController@rejectWorkshop')->name('reject');
	    Route::resource('/', 'Users\WorkshopController');
	});

});