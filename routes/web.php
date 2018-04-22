<?php
Route::get('dashboard', [
	'as' => 'dashboard', 'uses' => 'UsrController@dashboard'
]);
Route::get('crp', [
	'as' => 'crp', 'uses' => 'UsrController@crp'
]);
Route::get('ccp', [
	'as' => 'ccp', 'uses' => 'UsrController@ccp'
]);
Route::get('fullcalendar', [
	'as' => 'fullcalendar', 'uses' => 'UsrController@fullcalendar'
]);

Route::group(['middleware' => 'role:vwr'], function () {
	Route::get('{name?}', [
	'as' => 'home_index', 'uses' => 'WebController@index'
	])->where('name', 'home');
	Route::get('mmi-login', [
		'as' => 'mmi-login', 'uses' => 'WebController@login_v'
	]);
	Route::post('login', 'WebController@login');
});

Route::group(['middleware' => ['auth:jp_admin']], function(){
	Route::prefix('admin')->group(function () {
		Route::get('dashboard', [
	    'as' => 'admn_dashboard', 'uses' => 'AdmnController@dashboard'
		]);
		Route::get('images', [
	    'as' => 'admn_images', 'uses' => 'AdmnController@images'
		]);
		Route::get('logout', [
	    'as' => 'admn_logout', 'uses' => 'AdmnController@logout'
		]);
	});
});