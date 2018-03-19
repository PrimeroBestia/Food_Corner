<?php

class customer_model extends CI_Model {

	public function __construct() {
		parent:: __construct();
	}

	 public function order_spec(){

	 	$query = $this->db->get('order_spec');
		$query_result = $query->result();
		return $query_result;
	}

	public function read_order_spec($spec){

		$this->db->select('*');
		$this->db->from('order_spec');
		$this->db->where('order_spec_id', $spec);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	
	public function upadte_suppliers($id,$spec){

		$this->db->where('order_spec_id', $id);
		$this->db->update('order_spec', $spec);
	}
    
    public function delete_suppliers($spec){

    	$this->db->select('*');
		$this->db->from('order_spec');
		$this->db->where('order_spec_id', $spec);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
    }
	public function delete_suppliers($spec){

		$this->db->where('order_spec_id', $spec);
		$this->db->delete('order_spec');
	}

}
