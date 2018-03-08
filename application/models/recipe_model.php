<?php

class recipe_model extends CI_Model {

	public function __construct() {
		parent:: __construct();
	}

	 public function recipe(){

	 	$query = $this->db->get('recipe');
		$query_result = $query->result();
		return $query_result;
	}

	public function read_order_spec($rec){

		$this->db->select('*');
		$this->db->from('recipe');
		$this->db->where('r_id', $rec);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	
	public function upadte_suppliers($id,$rec){

		$this->db->where('r_id', $id);
		$this->db->update('recipe', $rec);
	}
    
    public function delete_suppliers($rec){

    	$this->db->select('*');
		$this->db->from('recipe');
		$this->db->where('r_id', $rec);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
    }
}
