<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//general page
Route::get('/', array('as' =>'home','uses' =>'homecontroller@home'));


//admin page

/*unauthenticated group*/
Route::group(array('before' => 'auth'), function() {
	Route::get('/admin',array('as'=>'admin_login','uses' => 'AdminController@getLogin'));
	Route::group(array('before' => 'csrf'), function() {
		Route::post('/admin',array('as'=>'admin_login_post','uses' => 'AdminController@postLogin'));	
	});	
});
	