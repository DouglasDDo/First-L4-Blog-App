<?php
//Public routes
Route::get('/', ['as' => 'home', 'uses' => 'PageController@getHome']);
Route::get('about', ['as' => 'about', 'uses' => 'PageController@getAbout']);
Route::get('projects', ['as' => 'projects', 'uses' => 'PageController@getProjects']);
Route::get('contact', ['as' => 'contact', 'uses' => 'PageController@getContact']);
Route::get('login', ['as' => 'login', 'uses' => 'UserController@getLogin']);
Route::post('auth', ['as' => 'auth', 'uses' => 'UserController@login']);

//Auth routes
Route::group(['before' => 'auth'], function(){

	Route::get( 'blog/create', ['as' => 'blog.create', 'uses' => 'BlogController@create']);
	Route::post( 'blog', ['as' => 'blog.store', 'uses' => 'BlogController@store']);
	Route::get('blog/{post}/edit', ['as' => 'blog.edit', 'uses' => 'BlogController@edit']);
	Route::put('blog/{post}/update', ['as' => 'blog.update', 'uses' => 'BlogController@update']);
	Route::patch('blog/{post}/update', ['uses' => 'BlogController@update']);
	Route::delete('blog/{post}/delete', ['as' => 'blog.delete', 'uses' => 'BlogController@destroy']);

	Route::get('logout', ['as' => 'logout', 'uses' => 'UserController@logout']);

});

//Blog Routes
Route::get('blog', ['as' => 'blog.index', 'uses' => 'BlogController@index']);
Route::get('blog/{id}', ['as' => 'blog.show', 'uses' => 'BlogController@show']);

/*
Route::get('projects', ['as' => 'projects.index', 'uses' => 'ProjectController@index']);
Route::get('projects/{id}', ['as' => 'projects.show', 'uses' => 'ProjectController@show']);
*/