<?php
use Illuminate\Http\Response;
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
Route::get('/', array('as' =>'home','uses' =>'HomeController@home'));
Route::get('/resume', array('as' =>'resume','uses' =>'HomeController@resume'));
Route::get('/skills', array('as' =>'skills','uses' =>'HomeController@skills'));
Route::get('/contact', array('as' =>'contact','uses' =>'HomeController@getContact'));
// Route::get ('/admin/blog-mini',array('as'=>'blog','uses'=>'AdminController@showBlog'));
Route::group(array('before' => 'csrf'), function() {
	Route::post('/contact', array('as' =>'contact-post','uses' =>'HomeController@postContact'));
	});
Route::get('/portfolio',array('as'=>'portfolio','uses'=>'HomeController@getportfolio'));
Route::get('/portfolio/website/healthplus',array('as'=>'healthplus','uses'=>"HomeController@getHealthplus"));
Route::get('/portfolio/website/pawnstar',array('as'=>'pawnstar','uses'=>"HomeController@getPawnstar"));
Route::get('/portfolio/website/sellmyapple',array('as'=>'sellmyapple','uses'=>"HomeController@getSellmyapple"));
Route::get('/portfolio/design/magazine',array('as'=>'magazine','uses'=>"HomeController@getMagazine"));
Route::get('/portfolio/film/flash',array('as'=>'flash','uses'=>"HomeController@getFlash"));
Route::get('/portfolio/film/ratherbe',array('as'=>'movie','uses'=>"HomeController@getRatherbe"));
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

//Authenticated g
Route::group(array('before'=>'auth'),function(){
	//admin main page
	Route::get('/admin',array('as'=>'admin-home','uses'=>'AdminController@getDashboard'));
	//get sign out
	Route::get('/account/signout',array('as' => 'account-sign-out','uses' => 'AdminController@getSignOut')); 
	//add slider image
	Route::get ('/admin/add-slider-images',array('as'=>'add-slider-images','uses'=>'AdminController@getAddImg'));
	Route::get ('/admin/view-images',array('as'=>'view-images','uses'=>'AdminController@viewImg'));
	Route::get ('/admin/add-blog',array('as'=>'add-blog','uses'=>'AdminController@getAddBlog'));
	/*CSRF PROTECTION GROUP*/
	Route::group(array('before' => 'csrf'), function() {
		Route::post ('/admin/add-slider-images',array('as'=>'add-slider-images-post','uses'=>'AdminController@postAddImg'));
		Route::post ('/admin/add-blog',array('as'=>'add-blog-post','uses'=>'AdminController@postAddBlog'));
		});
});