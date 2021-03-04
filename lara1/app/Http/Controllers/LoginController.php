<?php

namespace App\Http\Controllers;


use Request;
use \App\Login;

class LoginController extends Controller
{
    public function register()
    {
        $user = new Login;
        $user->username = Request::post('username');
        $user->password = password_hash(Request::post('password'), PASSWORD_DEFAULT);
        $user->save();

        return redirect('login');
    }
    
    public function login()
    {
        $username = Request::post('username');
        $password = Request::post('password');
        $user = Login::where('username', $username)->first();
        if (password_verify($password, $user['password']))
        {
            session_start();
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['role'] = "user";
            return redirect('secret');
        }
        else
        {
            return "login failed";
        }
    }

    public function secret()
    {
        session_start();
        if((!isset($_SESSION['login'])) or ($_SESSION['login']!= true))
        {
            return redirect('login');
        }
        return view ('secret');
    }
}
