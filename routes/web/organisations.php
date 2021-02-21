<?php
	Route::get('organisation/admin/{id}', 'OrganisationController@createAdmin')->name('organisation.user');
	Route::post('organisation/admin', 'OrganisationController@storeAdmin')->name('organisation.userstore');
	Route::resource('organisation', 'OrganisationController');