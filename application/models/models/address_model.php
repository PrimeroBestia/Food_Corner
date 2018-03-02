<?php

class customer_model extends CI_Model {

	public function __construct() {
		parent:: __construct();
	}

	 public function address(){

	 	$query = $this->db->get('address');
		$query_result = $query->result();
		return $query_result;
	}

	public function read_order_spec($add){

		$this->db->select('*');
		$this->db->from('address');
		$this->db->where('address_ID', $add);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	
	public function upadte_suppliers($id,$add){

		$this->db->where('address_ID', $id);
		$this->db->update('address', $add);
	}
    
    public function delete_suppliers($add){

    	$this->db->select('*');
		$this->db->from('address');
		$this->db->where('address_ID', $add);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
    }
	public function delete_suppliers($add){

		$this->db->where('address_ID', $add);
		$this->db->delete('address');
	}

}
