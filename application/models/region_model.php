<?php

class region_model extends CI_Model {

	public function __construct() {
		parent:: __construct();
	}

	public function add_region(){
		$data = array(
			'region_name' => $this->input->post('region_name'),
			'region_description' => $this->input->post('region_desc')
		);
		return $this->db->insert('region',$data);
	}

	public function get_region(){
    	$result = $this->db->get('region');
    	return $result->result_array();
	}
	public function get_regions($region){
		$this->db->where('region_id',$region);
    	$result = $this->db->get('region');
    	return $result->row_array();
	}
}
