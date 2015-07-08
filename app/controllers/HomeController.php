<?php

class HomeController extends BaseController {

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

	public function home() {
		$latestrecord=DB::table('slider_images')->orderBy('created_at', 'desc')->get()[0];
		return View::make('home')->with('latestrecord',$latestrecord);	
	}
	
	public function resume() {

		$contents = File::get('downloadfile/CV.pdf');

		return Response::make($contents, 200, array('content-type'=>'application/pdf'));

	}
	public function skills() {return View::make('skills');	}

	public function getContact(){
		return View::make('contact');
	}
	public function postContact(){

		$fromEmail=Input::get('email');

	    Mail::send('emails.contact', 
	    	array('fromEmail'=>Input::get('email'),'fromName'=>Input::get('name'), 'data'=>Input::get('message')), 
	    	function($message)
	    {
	        $message->to('beini.gao@gmail.com');

	        $message->from('beini.gao@gmail.com');

	    });

	    return Redirect::route('contact')
						->with('global','your contact email has been sent');
	}

	public function getportfolio(){
		return View::make('portfolio');
	}
}
