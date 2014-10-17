<?php

/**
* 
*/
class Post extends Eloquent
{
	public static $unguarded = true;
	public static function getAll() {
		$posts = Post::all();
		return $posts;
	}
	public static function get($id) {
		try {
			$post = Post::where('id', '=', $id)->firstOrFail();
		} 
		catch (Exception $e) {
			return $e;
		}
		
		return $post;
	}
	public static function add($data){
		try {
			$post = Post::create([
				'title' => $data['title'],
				'body' => $data['body'],
				'author' => Auth::user()->email
				]);
			return $post;
		}
		 catch (Exception $e) {
			return $e;
		}
	}

}