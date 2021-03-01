<?php namespace App\Controllers;

use App\Models\AjaxModel;
use App\Models\CheckUserModel;
use App\Models\CoordinatesModel;
use App\Models\SearchModel;

class Home extends BaseController
{
	protected $ajaxModel;
	protected $coordinatesModel;
	protected $checkUserModel;
	protected $searchModel;

	public function __construct(){
		$this->ajaxModel = new ajaxModel;
		$this->coordinatesModel = new CoordinatesModel;
		$this->checkUserModel = new checkUserModel;
		$this->searchModel = new searchModel;
	}
	
	//homepage
	public function index(){
		return view('home');
	}

	//username availability checker registration page
	public function register(){
		return view('register');
	}

	//returns things as JSON
	public function things()
	{
		$response = $this->ajaxModel->getAllThings();
		return $this->response->setJSON($response);
	}

	//adds a new "thing"
	public function addthing()
	{
		$things['thing'] = $this->request->getPost('thing');
		$this->ajaxModel->addNewThing($things);
	}

	//check username availability
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

	//Google map page
	public function map()
	{
		return view('map');
	}

	//return coordinates as JSON
	public function coordinates()
	{
		$response = $this->coordinatesModel->getCoords();
		return $this->response->setJSON($response);
	}

	//search page
	public function search()
	{
		return view('search');
	}

	//search suggestionspage
	public function suggestions()
	{
		return view('suggestions');
	}

	//query the search
	public function searchquery()
	{
		$searchstring = $this->request->getPost('searchstring');
		$response = $this->searchModel->query($searchstring);
		return $this->response->setJSON($response);
	}



	//--------------------------------------------------------------------
}