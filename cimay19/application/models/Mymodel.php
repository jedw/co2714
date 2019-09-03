<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mymodel extends CI_Model {
	
	public $ID;
	public $Forname;
	public $Surname;
	public $Age;
	

    public function __construct() {
        parent::__construct();
    }

    public function getRows () {
        
        $q = $this->db->get('mytable','asc');
        if ($q->num_rows()>0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
    }
    
    public function getOneRow($id) {
		$q = $query = $this->db->get_where('mytable', array('ID' => $id));
		if ($q->num_rows()>0) {
            foreach ($q->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
	}

    public function insert($data) {
   
        $this->db->insert('mytable',$data);
    }
    
    public function editOneRow($data, $id) {
      
        $this->db->where('ID', $id);
        $this->db->update('mytable', array('Forname' => $data['Forname'], 'Surname' => $data['Surname'],'Age' => $data['Age']));
    }

    public function check ($data) {
	
        $q = $this->db->get_where('mytable', array('Forname' => $data['Forname'], 'Surname' => $data['Surname'], 'Age' => $data['Age']),1,0);

        if ($q->num_rows()>0) {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function delete($id) {
		
        	$this->db->where('ID', $id);
			$this->db->delete('mytable');
				
    }
}
