<?php
class Site extends CI_Controller
{	
	function index()
	{
			$data = array();
			
			$this->load->model('Site_model');
			if($query = $this->Site_model->get_records())
			{
				$data['records'] = $query;
			}
			$this->load->view('options_view', $data);
	}
	
	function create()
	{
		$data = array(
		'title' => $this->input->post('title'),
		'content' => $this->input->post('content')
		);
		
		$this->load->model('Site_model');
		$this->Site_model->add_record($data);
		$this->index();
	}	
	
	function update()
	{
		$data = array (
			'title' => $this->input->post('title'),
		    'content' => $this->input->post('content')
		);
		$this->load->model('Site_model');
		$rowid = $this->input->post('id');
		$this->Site_model->update_record($data,$rowid);
		$this->index();
	}
	
	function delete()
	{
		$this->load->model('Site_model');
		$this->Site_model->delete_row();
		$this->index();
	}
}

?>
