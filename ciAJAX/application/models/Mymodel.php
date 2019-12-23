<?php

class Mymodel extends CI_Model {

    public $id;
    public $thing;

    public function getThings()
    {
        $query = $this->db->get('ajax');
        return $query->result();
    }

    public function addNewThing()
    {
        $this->thing = $_POST['thing'];
        $this->db->insert('ajax', $this);
    }
}