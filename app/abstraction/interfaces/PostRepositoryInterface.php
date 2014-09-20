<?php namespace abstraction\interfaces;

interface PostRepositoryInterface{
	public function retrieveAll();

	public function retrievePost($id);

	public function createPost($input);

	public function editPost($id, $input);

	public function deletePost($id);
}

 ?>