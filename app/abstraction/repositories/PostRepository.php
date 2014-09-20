<?php namespace abstraction\repositories;

//Uses MySQL db and Eloquent ORM

use abstraction\interfaces\PostRepositoryInterface;
use Post;

class PostRepository implements PostRepositoryInterface{
	public function retrieveAll(){
		return Post::orderBy('created_at', 'desc')->paginate(5);
	}

	public function retrievePost($id){
		return Post::findOrFail($id);
	}

	public function createPost($input){
		$post = Post::create([
			'title'		=>	$input['title'],
			'content'	=>	$input['content']
		]);
		$post->save();

		return $post;
	}

	public function editPost($id, $input){
		$post = Post::findOrFail($id);
		$post->title = $input['title'];
		$post->content = $input['content'];
		$post->save();

		return $post;
	}

	public function deletePost($id){
		$post = Post::findOrFail($id);
		$post->delete();
	}
}

 ?>