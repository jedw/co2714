<?php

class Site_model extends CI_Model {
		
	function get_records()
	{
		$query = $this->db->get('cicrud');
		return $query->result();
	}	

	function add_record($data)
	{
		$this->db->insert('cicrud',$data);
		return;
	}

	function update_record($data,$rowid)
	{
		$this->db->where('id',$rowid);
		$this->db->update('cicrud', $data);
	}
		
	function delete_row()
	{
		$this->db->where('id', $this->uri->segment(3));
		$this->db->delete('cicrud');
	}
		
}
?>
