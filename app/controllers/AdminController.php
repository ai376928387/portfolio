<?php

class AdminController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getLogin() {
		return View::make('admin.login');
	}
	public function postLogin(){
		$validator = Validator::make(Input::all(),
			array(
				'username' => 'required',
				'password' => 'required'
				)
			);
		if ($validator->fails()){
			return Redirect::route('admin_login')
					->withErrors($validator)
					->withInput();
			}else{

				$remember = (Input::has('remember'))?true:false;

				$auth =Auth::attempt(array(
					'username' => Input::get('username'),
					'password' => Input::get('password')
					),$remember);

				if($auth){
					return Redirect::intended('/admin');
				}else{
					return Redirect::route('admin_login')
					->with('global','There was a problem signing you');			
				}
			}
			printf('error');
			return Redirect::route('admin_login')
			->with('global','There was a problem signing you');
	}
	public function getDashboard(){
		return View::make('admin.dashboard');
	}
}
