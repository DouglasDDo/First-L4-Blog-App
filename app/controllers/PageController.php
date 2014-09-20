<?php

class PageController extends BaseController {

	public function getHome(){
		return View::make('site.home');
	}

    public function getAbout(){
        return View::make('site.about');
    }

    public function getContact(){
        return View::make('site.contact');
    }

    public function getLogin(){
        return View::make('site.login');
    }

}
