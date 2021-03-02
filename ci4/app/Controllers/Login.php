<?php namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
    protected $model;
	public function __construct()
    {
		$this->model = new LoginModel();
	}
    
    public function login()
    {
        return view ('login');
    }

    public function login_post()
    {
        $data = [
            'username' => $this->request->getPost('username'),
        ];
        $user = $this->model->login($data);
        if($user)
        {
            if(password_verify($this->request->getPost('password'), $user['password'] ))
            {
                $_SESSION['login'] = true;
                $_SESSION['role'] = 'user';
                $_SESSION['username'] = $user['password'];
                return redirect()->to(base_url('index.php/secret')); 
            }
            else
            {
                return "login failed";
            }
        }
        else
        {
            return "login failed";
        }
    }

    public function register()
    {
        return view ('register');
    }

    public function register_post()
    {
        $hash = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => $hash,
        ];
		$this->model->register($data);
		return redirect()->to(base_url('index.php/login')); 
    }

    public function secret()
    {
        return view ('secret');
    }
}