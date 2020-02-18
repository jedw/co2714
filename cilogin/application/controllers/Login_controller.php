<?php
defined ('BASEPATH')OR exit ('No direct script access allowed');

class login_controller extends CI_Controller {
	
	//load the login page
	public function index()
	{
		$this->load->view('login');
	}
	
	//check the login
	public function checklogin()
	{
		$data = array (
			'Username' => $this->input->post('Username'),
		);
		$user = $this->login_model->check_user($data);
		if (count($user) > 0){
			$password = $user[0]->Password;
			if (password_verify($this->input->post('Password'), $password)){
				$loginsession = array (
					'user' => $this->input->post('Username'),
					'isLogin' => true
				);
				$this->session->set_userdata($loginsession);
				$this->another();
			}
		}else{
			$message['loginMsg'] = "Login Failed please try again";
			$this->load->view('login', $message);
		}
	}
	
	//permit access to logged in only area
	public function another(){
		if (!isset ($_SESSION['isLogin'])){
			$this->index();
		}else{
			$data['username'] =  $_SESSION['user'];
			$this->load->view('userarea', $data);
		}
	}
}
?>