<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

	public function things()
	{
		$this->load->model('Mymodel');
		$things = $this->Mymodel->getThings();
		header('Content-Type: application/json');
		echo json_encode($things);
	}

	public function addthing()
	{
		$this->load->model('Mymodel');
		$this->Mymodel->addNewThing();
	}

	public function register()
	{
		$this->load->view('register');
	}

	function checkuser(){
        $data['username'] = $this->input->post('uname');
		$this->load->model('Usermodel');
		$check =  $this->Usermodel->check($data);
        if ($check){
			$jsonReply['availability'] = false; //Set availability to false
        	header('Content-Type:application/json;');
        	echo json_encode($jsonReply); //Encode the array to JSON
        } else{
			$jsonReply['availability'] = true; //Set availability to false
        	header('Content-Type:application/json;');
        	echo json_encode($jsonReply); //Encode the array to JSON
        }
    }
}