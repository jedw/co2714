<?php
defined ('BASEPATH')OR exit ('No direct script access allowed');

class login_controller extends CI_Controller {
	
	public function index()
	{
		$this->load->view('login');
	}
	
	public function checklogin()
	{
		$this->load->model('login_model');
		$data = array (
			'Username' => $this->input->post('Username'),
			'Password'=> $this->input->post('Password')
		);
		
		$user = $this->login_model->check_user($data);
		if ($user->num_rows() ==1)
		{
			
			$loginsession = array (
				'user' => $this->input->post('Username'),
				'isloggedin' => true
			);
			$this->session->set_userdata($loginsession);
			$this->another();
		}
		else
		{
			$this->index();
		}
	}
	
	public function another()
	{
		if (!isset ($_SESSION['isloggedin']))
		{
			$this->index();
		}
		$this->load->view('userarea');
	}
}
?>
