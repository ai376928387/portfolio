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
	public function getCreate() {
		return View::make('admin.create');
	}

	public function postCreate() {
		$validator= Validator::make(Input::all(),
		array(
			'username' 		 => 'required|max:20|min:3|unique:users',
			'password' 		 => 'required|min:6',
			)
		);

		if ($validator->fails()){
			return Redirect::route('account-create')
				->withErrors($validator)
				->withInput();
		}else{
			$username	=Input::get('username');
			$password 	=Input::get('password');

			$user 	 	=User::create(array(
				'username' => $username,
				'password' => Hash::make($password),
				));

			if($user){
				return Redirect::route('admin_login')
						->with('global','your account has been created,please sign in');
			}else{
				return Redirect::route('account-create')
				->with('global','register unsuccessfully');	
			}
		}
	}


	public function getLogin() {
		return View::make('admin.login');
	}
	public function postLogin(){
		$username=Input::get('username');
		$password=Input::get('password');
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

				if(Auth::attempt(array('username' => $username,'password' => $password)))
				{
					return Redirect::intended('/admin');
				}else{
					return Redirect::route('admin_login')
					->with('global','You username or password is not correct');			
				}
			}
			return Redirect::route('admin_login')
			->with('global','There was a problem signing you yyyy');
	}
	public function getSignOut() {
		Auth::logout();
		return Redirect::route('home');
	}
	public function getDashboard(){
		return View::make('admin.dashboard');
	}
	public function getAddImg(){
		return View::make('admin.addImg');
	}
	public function postAddImg(){
		//image upload
		$move = Input::file('images')->move('uploadfiles',Input::file('images')->getClientOriginalName());

		if($move){
			$sliderImage =SliderImage::create(array(
			'title' => Input::get('title'),
			'description' => Input::get('description'),
			'image_name'=>Input::file('images')->getClientOriginalName(),
			));
			return Redirect::route('add-slider-images')
						->with('global','Image uploaded successfully');
		}
	}
	public function getAddBlog(){
		return View::make('admin.addBlog');
	}
	public function postAddBlog(){
		$posts =Post::create(array(
		'title' => Input::get('title'),
		'content' => Input::get('content'),
		));
		return Redirect::route('add-blog')
					->with('global','post uploaded successfully');
	}
}
