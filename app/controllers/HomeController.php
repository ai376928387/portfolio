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

	public function home() {return View::make('home');	}
	
	public function resume() {

		$contents = File::get('downloadfile/CV.pdf');

		return Response::make($contents, 200, array('content-type'=>'application/pdf'));

	}
	public function skills() {return View::make('skills');	}

	public function getContact(){
		return View::make('contact');
	}
	public function postContact(){
		$fromEmail = Input::get('email');
	    $fromName = Input::get('name');
	    $data = Input::get('message');

	    $toEmail = 'beini.gao@gmail.com';
	    $toName = 'Wicky Gao';

	    Mail::send('emails.contact', $data, function($message) use ($toEmail, $toName, $fromEmail, $fromName)
	    {
	        $message->to($toEmail, $toName);

	        $message->from($fromEmail, $fromName);

	    });
	}
}
