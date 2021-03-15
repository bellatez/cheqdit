<?php

Route::group(['middleware' => ['auth']], function () {
	Route::group(['middleware' => ['verified']], function () {
		Route::prefix('users')->name('users.')->group(function() {
			Route::put('approve/{user}', 'Users\AdminController@approveAdmin')->name('approve');
			Route::put('reject/{user}', 'Users\AdminController@rejectAdmin')->name('reject');
	    	Route::get('request', 'Users\AdminController@requestList')->name('request');
    		Route::get('{type?}', 'Users\AdminController@index')->name('index');
    		Route::get('create/{type?}', 'Users\AdminController@create')->name('create');
		});
    	Route::resource('users', 'Users\AdminController')->except(['create','index']);
	    Route::post('userStatus', 'Users\UserController@userStatus')->name('users.status');
	   
	    Route::prefix('workshops')->name('workshops.')->group(function () {
		    Route::get('request', 'Users\WorkshopController@requestList')->name('request');
		    Route::put('approve/{workshop}', 'Users\WorkshopController@approveWorkshop')->name('approve');
		    Route::put('reject/{workshop}', 'Users\WorkshopController@rejectWorkshop')->name('reject');
		});
	    Route::resource('workshops', 'Users\WorkshopController');
	});

	Route::get('users/reset', 'Users\UserController@resetPasswordForm')->name('users.reset_password_form')->middleware('unverified');
	Route::put('users/reset', 'Users\UserController@resetPassword')->name('users.reset_password')->middleware('unverified');
});