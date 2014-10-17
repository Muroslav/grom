<?php

/**
* PostController
*/
class UserController extends BaseController
{
	public function login(){
		$data = Input::all();

		$rules = [
			'email' => 'required|email|min:6',
			'password' 	=> 'required|min:6'
		];

		$val = Validator::make($data, $rules);

		if($val -> fails()) {
			$errors = $val -> messages() -> toArray();
			return View::make('errors.validation')->with('errors', $errors);
		}

		$user = User::login($data);

		if(!$user){
			return "Помилка авторизації";
		} else {
			return Redirect::to(URL::previous());
		}
	}


	public function registr(){
		$data = Input::all();

		$rules = [
			'email' => 'required|email|min:6|unique:users',
			'password' 	=> 'required|min:6|same:repeat_password',
			'repeat_password' => 'required|min:6'
		];

		$val = Validator::make($data, $rules);

		if($val -> fails()) {
			$errors = $val -> messages() -> toArray();
			return View::make('errors.validation')->with('errors', $errors);
		}

		$user = User::register($data);

		if ($user instanceof Illuminate\Database\Eloqument\Model) {
			return $user;
		} 
		
		Auth::login($user, true);
		return Redirect::to('/');
	}
}