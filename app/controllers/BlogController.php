<?php

use abstraction\interfaces\PostRepositoryInterface;

class BlogController extends BaseController {

	public $post;

    public function __construct(PostRepositoryInterface $post)
    {
		$this->post = $post;
	}

	public function index()
	{
		$posts = $this->post->retrieveAll();
        return View::make('blog.index')->with('posts', $posts);
	}

	public function create()
	{
        return View::make('blog.create');
	}


	public function store()
	{
		$input = Input::all();
		$post = $this->post->createPost($input);

		return View::make('blog.post')->with('post', $post);
	}

	public function show($id)
	{
		$post = $this->post->retrievePost($id);

        return View::make('blog.post')->with('post', $post);
	}

	public function edit($id)
	{
		$post = $this->post->retrievePost($id);

        return View::make('blog.edit')->with('post', $post);
	}

	public function update($id)
	{
		$input = Input::all();
		$post = $this->post->editPost($id, $input);

		return View::make('blog.post')->with('post', $post)->with('flash_message', 'Post has been updated');
	}

	public function destroy($id)
	{
		$post = $this->post->deletePost($id);

		return Redirect::to('/blog')->with('flash_message', 'Blog post was deleted.');
	}

}