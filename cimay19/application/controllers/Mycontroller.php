<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mycontroller extends CI_Controller {

    //homepage
    public function index(){
        $this->load->view('welcome_message');
    }

    //show all records
    public function show(){
        $data['records'] = $this->mymodel->getRows();
        $this->load->view('showrows',$data);
    }

    //show insert new page
    function insert(){
        $this->load->view('insertview');
    }

    //insert new
    function insert_post(){
        $data = array (
                    'Forname' => $this->input->post('forname'),
                    'Surname' => $this->input->post('surname'),
                    'Age' => $this->input->post('age')
                );
        $this->mymodel->insert($data);
        $this->Show();
    }

    //delete record
    function delete(){
		$id = $this->uri->segment(2);
		$this->mymodel->delete($id);
		$this->show();
	}
    
    //show edit page and pre-popualte
	function edit(){
		$id = $this->uri->segment(2);
		$data['record'] = $this->mymodel->getOneRow($id);
		$this->load->view('editview',$data);
	}
    
    //update edited record
	function editpostback(){
		$id = $this->uri->segment(2);
		  $data = array (
                    'Forname' => $this->input->post('forname'),
                    'Surname' => $this->input->post('surname'),
                    'Age' => $this->input->post('age')
                );
		$this->mymodel->editOneRow($data, $id);
		$this->show(); //re-direct
    }
    
    //load check page
    function check(){
        $this->load->view('check');
    }

    //IGNORE THIS BELOW
    //check if details can be found
    function check_post(){
        $data = array (
                    'Forname' => $this->input->post('forname'),
                    'Surname' => $this->input->post('surname'),
                    'Age' => $this->input->post('age')
                );
        $check =  $this->mymodel->check($data);
        if ($check){
			$_GET['checkmsg'] = "Record is found";
			$this->check();
        } else{
			$_GET['checkmsg'] = "Record is NOT found";
			$this->check(); //re-direct
        }
    }
}
?>