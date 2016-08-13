<?php

class Login_Controller extends Controller{
    public $restful = true;

    public function get_register(){
        return View::make('login.register');
    }

    public function post_register(){
        $user = new User;
        $user->name = Input::get('name');
        $user->password = Hash::make(Input::get('password'));
        $user->username = Input::get('username');
        $user->email = Input::get('email');

        $user->save();
        return Redirect::to('/');
    }

    public function post_login(){
        $data = array(
            'username'  =>  $_POST['username'],
            'password'  =>  Input::get('password')
        );

        if(Auth::attempt($data)){
            Session::put('user_id', Auth::user()->id);
            return Redirect::to('/');
        }else{

        }
    }
}