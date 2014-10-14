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

}