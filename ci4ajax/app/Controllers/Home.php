<?php namespace App\Controllers;

use App\Models\AjaxModel;
use App\Models\CheckUserModel;

class Home extends BaseController
{
	public function index(){
		return view('home');
	}

	public function register(){
		return view('register');
	}

	public function things()
	{
		$model = new AjaxModel();
		$data = $model->getAllThings();
		return $this->response->setJSON($data);
	}

	public function addthing()
	{
		$model = new AjaxModel();
		$things['thing'] = $this->request->getPost('thing');
		$model->addNewThing($things);
	}

	public function checkUser()
	{
		$user = $this->request->getPost('uname');
		$model = new CheckUserModel();
		$check = $model->getUserWhere($user);

		if ($check)
		{
			$jsonReply['availability'] = false; 
        	return $this->response->setJSON($jsonReply);
		} 
		else
		{
			$jsonReply['availability'] = true; 
        	return $this->response->setJSON($jsonReply);
        }
	}
	//--------------------------------------------------------------------
}