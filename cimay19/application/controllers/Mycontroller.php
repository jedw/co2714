<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mycontroller extends CI_Controller {

    public function index()
    {
        $this->load->view('welcome_message');
    }
    public function show()
    {
        $this->load->model('mymodel');
        $data['records'] = $this->mymodel->getRows();
        $this->load->view('showrows',$data);
    }

    function insert()
    {
        $this->load->view('insertview');
    }

    function insert_post()
    {
        $this->load->model('mymodel');
        $this->form_validation->set_rules('forname', 'Forname');
        $this->form_validation->set_rules('surname', 'Surname');
        $this->form_validation->set_rules('age', 'Age');

        $data = array (
                    'Forname' => $this->input->post('forname'),
                    'Surname' => $this->input->post('surname'),
                    'Age' => $this->input->post('age')
                );
        $this->mymodel->insert($data);
        $this->Show();
    }

    function check()
    {
        $this->load->view('check');
    }

    function check_post()
    {
        $this->load->model('mymodel');

        $data = array (
                    'Forname' => $this->input->post('forname'),
                    'Surname' => $this->input->post('surname'),
                    'Age' => $this->input->post('age')
                );

        $check =  $this->mymodel->check($data);
        if ($check)
        {
			$_GET['checkmsg'] = "Record found";
			$this->check();
        }
        else
        {
			$_GET['checkmsg'] = "Record not found";
			$this->check();
        }
    }
    
    function delete()
    {
		$id = $this->uri->segment(3);
		$this->load->model('mymodel');
		$this->mymodel->delete($id);
		$this->show();
	}
	
	function edit()
	{
		$id = $this->uri->segment(3);
		$this->load->model('mymodel');
		$data['record'] = $this->mymodel->getOneRow($id);
		$this->load->view('editview',$data);
	}
	
	function edit_post()
	{
		$id = $this->uri->segment(3);
		$this->load->model('mymodel');
		  $data = array (
                    'Forname' => $this->input->post('forname'),
                    'Surname' => $this->input->post('surname'),
                    'Age' => $this->input->post('age')
                );
		$this->mymodel->editOneRow($data, $id);
		$this->show();
	}
}
?>