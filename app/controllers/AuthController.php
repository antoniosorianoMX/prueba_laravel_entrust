<?php

class AuthController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function login()
	{
		$username = Input::get('user');
		$password = Input::get('password');

		if (Auth::attempt(['username' => $username, 'password' => $password]))
        {
            return Redirect::to('home');
        }
        return Redirect::to('/');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function logout()
	{
        Session::flush();
		Auth::logout();
        return Redirect::to('/');
	}


}
