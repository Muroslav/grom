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

	public function index()
	{	
			if(!Auth::check()){
				
				return View::make('auth.login');

			} else {

				$posts = Post::getAll();
				$users = User::all();
				// return '<pre>'.print_r($posts, true).'</pre>';
				return View::make('pages.news')->with('posts', $posts)->with('users', $users);

		}
		
	}

}
