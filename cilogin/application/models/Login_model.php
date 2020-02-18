<?php
defined ('BASEPATH')OR exit ('No direct script access allowed');

class login_model extends CI_Model {

	public $Username;
	public $Password;

	function __construct(){
		parent::__construct();
	}
	
	//return row if username found in login table
	function check_user($data){
		$query = $this->db->get_where('login', array('Username'=> $data['Username']))->result();
		return $query; 
	}
}
?>