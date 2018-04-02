<?php
Route::get('{name?}', [
	'as' => 'index', 'uses' => 'UsrController@index'
])->where('name', 'home');
Route::get('crp', [
	'as' => 'crp', 'uses' => 'UsrController@crp'
]);
Route::get('ccp', [
	'as' => 'ccp', 'uses' => 'UsrController@ccp'
]);
Route::get('fullcalendar', [
	'as' => 'fullcalendar', 'uses' => 'UsrController@fullcalendar'
]);