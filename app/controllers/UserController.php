<?php

class UserController extends BaseController {

	/**
	 * Direct to user login page.
	 */
	public function getLogin()
	{
		return View::make('site.login');
	}

	/**
	 * User login action.
	 */
	public function login()
	{
		$email 		=	Input::get('email');
		$password	=	Input::get('password');

		$attempt	=	Auth::attempt([
							'email'		=>	$email,
							'password'	=>	$password
						]);

		if($attempt){
			return Redirect::to('/')->with('flash_message', 'Login successful!');
		}
		return Redirect::back()->with('flash_message', 'Login failed. Invalid credentials.')->withInput();
	}

	/**
	 * Logout action.
	 */
	public function logout()
	{
		Auth::logout();

		return Redirect::home()->with('flash_message', 'You have been logged out.');
	}

}