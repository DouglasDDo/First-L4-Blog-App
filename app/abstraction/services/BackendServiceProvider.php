<?php namespace abstraction\services;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider{

	public function register(){
		$this->app->bind(
			'abstraction\interfaces\PostRepositoryInterface',
			'abstraction\repositories\PostRepository'
		);
	}
}