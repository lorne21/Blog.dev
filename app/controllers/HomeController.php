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

	public function showWelcome()
	{
		return View::make('hello');
	}


	public function getPortfolio()
	{
		return View::make('portfolio');
	}

	public function showMole()
	{
		return Redirect::action('HomeController@getMole');
	}

	public function getMole()
	{
		return View::make('mole');
	}

	public function getSimon()
	{
		return View::make('simon');
	}

	public function showLogin()
	{
		return View::make('login');
	}

	public function getPractice()
	{
		return View::make('practice');
	}

	public function doLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email'=> $email, 'password'=> $password))){
			Session::flash('successMessage', 'You logged in successfully');
			return Redirect::intended('/');
		} else {
			Session::flash('errorMessage', 'Login credentials are incorrect.');
			//log email that tried to authenticate
			return Redirect::action('HomeController@showLogin');
		}
	}

	public function doLogout()
	{
		Auth::logout();
		Session::flash('successMessage', 'You are logged out');
		return Redirect::to('EventsController@index');
	}


}
