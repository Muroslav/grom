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
			'name' => 'required|min:3',
			'email' => 'required|email|min:6|unique:users',
			'password' 	=> 'required|min:6|same:repeat_password',
			'repeat_password' => 'required|min:6',
			'images' => 'mimes:jpeg,png,gif'
		];

		$val = Validator::make($data, $rules);

		if($val -> fails()) {
			$errors = $val -> messages() -> toArray();
			return View::make('errors.validation')->with('errors', $errors);
		}
			$image = Input::file('images');
	        $image->move( public_path().'/assets/tmp', $image );
		$user = User::register($data);


		// $filename = Input::file('images')->getClientOriginalName();
		// $data['images']->move( public_path().'/assets/thumbs/', $filename );

		if ($user instanceof Illuminate\Database\Eloqument\Model) {
			return $user;
		} 
		
		Auth::login($user, true);
		return Redirect::to('/');
	}
}