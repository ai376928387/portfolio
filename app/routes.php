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
Route::group(array('before' => 'guest'), function() {
	//log in
	Route::get('/admin-sign-in',array('as'=>'admin_login','uses' => 'AdminController@getLogin'));
	Route::get('/admin-create', array('as' => 'account-create','uses' => 'AdminController@getCreate'));
	
	/*CSRF PROTECTION GROUP*/
	Route::group(array('before' => 'csrf'), function() {
		Route::post('/admin-create', array('as' => 'account-create-post','uses' => 'AdminController@postCreate'));
		Route::post('/admin-sign-in',array('as'=>'admin_login_post','uses' => 'AdminController@postLogin'));	
	});
});

Route::group(array('before'=>'auth'),function(){
	//admin main page
	Route::get('/admin',array('as'=>'admin-home','uses'=>'AdminController@getDashboard'));
});