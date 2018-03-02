<?php

class customer_model extends CI_Model {

	public function __construct() {
		parent:: __construct();
	}

	 public function suppliers(){

	 	$query = $this->db->get('suppliers');
		$query_result = $query->result();
		return $query_result;
	}

	public function read_order_spec($sup){

		$this->db->select('*');
		$this->db->from('suppliers');
		$this->db->where('s_id', $sup);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	
	public function upadte_suppliers($id,$sup){

		$this->db->where('s_id', $id);
		$this->db->update('suppliers', $sup);
	}
    
    public function delete_suppliers($sup){

    		$this->db->select('*');
		$this->db->from('suppliers');
		$this->db->where('s_id', $sup);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
    }
	public function delete_suppliers($sup){

		$this->db->where('s_id', $sup);
		$this->db->delete('suppliers');
	}

}
