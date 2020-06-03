<?php

class Usermodel extends CI_Model {

    public $ID;
    public $firstname;
    public $surname;
    public $password;
    public $email;

    public function check ($data) {
        $un = $data['username'];
        $q = $this->db->get_where('ajaxcheckuser', array('username' => $un),1,0);
        if ($q->num_rows()>0) {
            return TRUE;
        }else{
            return FALSE;
        }
    }
}