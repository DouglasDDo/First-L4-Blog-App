<?php

class Post extends Eloquent {
	protected $fillable = ['title', 'content'];

	public static $rules = array();
}