<?php

class Index_Controller extends Controller {

	public $restful = true;

	public function get_index()
	{
		if(Auth::user()){
            return View::make('index');
        }
        else{
            return View::make('login.login');
        }
	}

}