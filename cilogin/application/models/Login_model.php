<?php
defined ('BASEPATH')OR exit ('No direct script access allowed');

class login_model extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}
	
	function check_user($data)
	{
		$query = $this->db->get_where('login', array('Username'=> $data['Username'], 'Password'=> $data['Password']),1,0);
		return $query; 
	}
}
?>
