<?php

/**
* PostController
*/
class UserController extends BaseController
{
	public function login(){
		$data = Input::all();
		// $users = User::all();

		// return '<pre>'.print_r($users, true).'</pre>';
		// die();

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
		if(User::login($data)){
			User::where('id', Auth::user()->id)->update(array(
            	'active'    =>  1
      		));
		}
		if(!$user){
			return "Помилка авторизації";
		} else {
			return Redirect::to(URL::previous());
		}
	}

	public function logout(){
		User::where('id', Auth::user()->id)->update(array(
	        'active'    =>  0
	    ));
		Auth::logout();
		return Redirect::to('/');
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


		if(Input::hasFile('images')){
			$data['images'] = Input::file('images')->getClientOriginalName();
	        Input::file('images')->move( public_path().'/assets/tmp', $data['images'] );
	        }
		$user = User::register($data);

		if ($user instanceof Illuminate\Database\Eloqument\Model) {
			return $user;
		} 
		Auth::login($user, true);
		if(User::login($data)){
			User::where('id', Auth::user()->id)->update(array(
            	'active'    =>  1
      		));
		}
		return Redirect::to('/');
	}

	public function updateInfo(){
		$data = Input::all();
		$customer = Auth::user()->id;
		$images = Input::file('images');

		if(Input::hasFile('images')){
			$data['images'] = Input::file('images')->getClientOriginalName();
	        Input::file('images')->move( public_path().'/assets/tmp', $data['images'] );
	    }

	    User::where('id', $customer)->update(array(
            'images'    =>  $data['images']
        ));
        Post::where('id', $customer)->update(array(
            'images'    =>  $data['images']
        ));

		return Redirect::to('/');
	}

}