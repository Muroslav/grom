<?php

/**
* 
*/
class Post extends Eloquent
{
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

}