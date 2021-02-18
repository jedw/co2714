<?php namespace App\Controllers;

use App\Models\StudentModel;


class Home extends BaseController
{
	public $model;
	public function __construct()
    {
		$this->model = new StudentModel();
	}

	public function index(){
		return view('welcome_message');
	}

	public function records(){
		$data['students'] = $this->model->getAllStudents();
		return view('records', $data);
	}

	public function create(){
		return view('add');
	}

	public function store(){
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
		$id = $this->request->uri->getSegment(3);
		$data['student'] = $this->$model->getStudentWhere($id);
		return view('edit', $data);
	}

	public function update(){
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
		$id = $this->request->uri->getSegment(3);
		$thig->model->deleteStudentWhere($id);
		return redirect()->to(base_url('index.php/home/records')); 
	}
	//--------------------------------------------------------------------
}