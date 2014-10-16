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
		if ($post instanceof Exeption) {
			return "error";
		}
		return View::make('post.show-post')->with('post', $post);
	}
}