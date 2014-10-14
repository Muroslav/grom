<?php

/**
* PostController
*/
class PostController extends BaseController
{
	
	public function getPost($id)
	{
		$id = (int)$id;
		$post = Post::get($id);
		return $post;
	}
}