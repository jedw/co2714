<?php namespace App\Controllers;

use App\Models\AjaxModel;
use App\Models\CheckUserModel;
use App\Models\CoordinatesModel;

class Home extends BaseController
{
	protected $ajaxModel;
	protected $coordinatesModel;
	protected $checkUserModel;

	public function __construct(){
		$this->ajaxModel = new ajaxModel;
		$this->coordinatesModel = new CoordinatesModel;
		$this->checkUserModel = new checkUserModel;
	}
	
	public function index(){
		return view('home');
	}

	public function register(){
		return view('register');
	}

	public function things()
	{
		$response = $this->ajaxModel->getAllThings();
		return $this->response->setJSON($response);
	}

	public function addthing()
	{
		$things['thing'] = $this->request->getPost('thing');
		$this->ajaxModel->addNewThing($things);
	}

	public function checkUser()
	{
		$user = $this->request->getPost('uname');
		$check = $this->checkUserModel->getUserWhere($user);

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
		$response = $this->coordinatesModel->getCoords();
		return $this->response->setJSON($response);
	}

	public function map()
	{
		return view('map');
	}

	public function test()
	{
		$response = array(
			'name' => 'Rebecca',
			'nationality' => 'UK',
		);
		return $this->response->setJSON($response);
	}
	//--------------------------------------------------------------------
}