<?php
/**
 * Created by PhpStorm.
 * User: MiniRaptor
 * Date: 21.07.2016
 * Time: 23:50
 */

class User_Controller extends Controller{
    public $restful = true;

    /* Redirects to login form */
    public function get_index(){
        return View::make('login.index');

    }

    /* Redirects to Register form */
    public function get_register(){
        return View::make('login.register');
    }
}