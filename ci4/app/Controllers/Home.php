<?php namespace App\Controllers;

use App\Models\StudentModel;


class Home extends BaseController
{
	public function index(){
		return view('welcome_message');
	}

	public function records(){
		$model = new StudentModel();
		$data['students'] = $model->getAllStudents();
		return view('records', $data);
	}

	public function create(){
		return view('add');
	}

	public function store(){
        $model = new StudentModel();
        $data = [
            'first_name' => $this->request->getPost('Fname'),
            'last_name' => $this->request->getPost('Lname'),
            'address' => $this->request->getPost('Address'),
            'email' => $this->request->getPost('Email'),
            'mobile' => $this->request->getPost('Mobile'),
        ];
		$model->addNewStudent($data);
		return redirect()->to(base_url('index.php/home/records')); 
	}

	public function edit(){
		$model = new StudentModel();
		$id = $this->request->uri->getSegment(3);
		$data['student'] = $model->getStudentWhere($id);
		return view('edit', $data);
	}

	public function update(){
        $model = new StudentModel();
        $data = [
			'first_name' => $this->request->getPost('Fname'),
            'last_name' => $this->request->getPost('Lname'),
            'address' => $this->request->getPost('Address'),
            'email' => $this->request->getPost('Email'),
            'mobile' => $this->request->getPost('Mobile'),
		];
		$id = $this->request->uri->getSegment(3);
		$model->updateStudentWhere($data, $id);
		return redirect()->to(base_url('index.php/home/records')); 
	}

	public function delete(){
		$model = new StudentModel();
		$id = $this->request->uri->getSegment(3);
		$model->deleteStudentWhere($id);
		return redirect()->to(base_url('index.php/home/records')); 
	}
	//--------------------------------------------------------------------
}