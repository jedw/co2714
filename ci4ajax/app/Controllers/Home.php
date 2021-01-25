<?php namespace App\Controllers;

use App\Models\AjaxModel;

class Home extends BaseController
{
	public function index(){
		return view('home');
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
	//--------------------------------------------------------------------
}