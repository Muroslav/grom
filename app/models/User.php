<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {
	
	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	public static $unguarded = true;
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public static function login($data){
		if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']], true)) {
			return Auth::user();

		} else {
			return 'false';
		}
	}

	public static function register($data){
		try {
			$user = User::create([
					'name' => $data['name'],
					'email' => $data['email'],
					'password' => Hash::make($data['password']),
					'images' => $data['images']
				]);
		} catch (Exception $e) {
			return $e;
		}
		return $user;
	}

}
