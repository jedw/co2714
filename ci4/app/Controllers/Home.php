<?php namespace App\Controllers;

use App\Models\StudentModel;

class Home extends BaseController
{
	protected $model;
	public function __construct(){
		$this->model = new StudentModel();
		$this->session = \Config\Services::session();
	}

	public function index(){
		return view('welcome_message');
	}

	public function records(){
		if (!$this->isloggedin())
			return redirect()->to(base_url('index.php/login')); 
		$data['students'] = $this->model->getAllStudents();
		return view('records', $data);
	}

	public function create(){
		if (!$this->isloggedin())
			return redirect()->to(base_url('index.php/login')); 
		return view('add');
	}

	public function store(){
		if (!$this->isloggedin())
			return redirect()->to(base_url('index.php/login')); 
        $data = [
            'first_name' => $this->request->getPost('Fname'),
            'last_name' => $this->request->getPost('Lname'),
            'address' => $this->request->getPost('Address'),
            'email' => $this->request->getPost('Email'),
            'mobile' => $this->request->getPost('Mobile'),
        ];
		$this->model->addNewStudent($data);
		return redirect()->to(base_url('index.php/home/records')); 
	}

	public function edit(){
		if (!$this->isloggedin())
			return $this->response->setStatusCode(404, "404 not found");
		$id = $this->request->uri->getSegment(2);
		$data['student'] = $this->model->getStudentWhere($id);
		return view('edit', $data);
	}

	public function update(){
		if (!$this->isloggedin())
			return $this->response->setStatusCode(404, "404 not found");
        $data = [
			'first_name' => $this->request->getPost('Fname'),
            'last_name' => $this->request->getPost('Lname'),
            'address' => $this->request->getPost('Address'),
            'email' => $this->request->getPost('Email'),
            'mobile' => $this->request->getPost('Mobile'),
		];
		$id = $this->request->uri->getSegment(3);
		$this->model->updateStudentWhere($data, $id);
		return redirect()->to(base_url('index.php/home/records')); 
	}

	public function delete(){
		if (!$this->isloggedin())
			$this->response->setStatusCode(404, "404 not found");
		$id = $this->request->uri->getSegment(2);
		$this->model->deleteStudentWhere($id);
		return redirect()->to(base_url('index.php/home/records')); 
	}
	//--------------------------------------------------------------------
}