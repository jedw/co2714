<?php namespace App\Controllers;

use App\Models\AjaxModel;
use App\Models\CheckUserModel;
use App\Models\CoordinatesModel;

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
		$response = $model->getAllThings();
		return $this->response->setJSON($response);
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
			$response['availability'] = false; 
        	return $this->response->setJSON($response);
		} 
		else
		{
			$response['availability'] = true; 
        	return $this->response->setJSON($response);
        }
	}

	public function coordinates()
	{
		$model = new CoordinatesModel();
		$response = $model->getCoords();
		return $this->response->setJSON($response);
	}

	public function map()
	{
		return view('map');
	}
	//--------------------------------------------------------------------
}