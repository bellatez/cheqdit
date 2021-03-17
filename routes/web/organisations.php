<?php
	Route::group(['middleware' => ['auth', 'verified', 'role:superadministrator']], function () {
		Route::get('organisations/update/status', 'OrganisationController@toggleStatus')->name('organisations.update.status');
		Route::get('organisations/admin/{id}', 'OrganisationController@createAdmin')->name('organisations.user');
		Route::post('organisations/admin/{org}', 'OrganisationController@storeAdmin')->name('organisations.user_store');
		Route::resource('organisations', 'OrganisationController');
	});