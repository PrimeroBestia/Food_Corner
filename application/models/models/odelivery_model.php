<?php

class customer_model extends CI_Model {

	public function __construct() {
		parent:: __construct();
	}

	public function validate($data) {

		$this->db->select('*');
		$this->db->from('customer_order');
		$this->db->where('order_id', $delivery);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function read_delivery(){

		$this->db->select('*');
		$this->db->frotm('order_delivery');
		$query=$this->db->get();
		return=$query->result_array();
	}
	public function update_delivery($delivery){
		$query=$this->db->query("UPDATE delivery_id FROM order_delivery where order_id = ".$delivery);
		if($query->num_row()>0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}public function delete_delivery($delivery){
		$query=$this->db->query("DELETE delivery_id FROM order where order_id = ".$delivery);
		if($query->num_row()==NULL){
			return $query->result();
		}
		else{
			return 1;
		}
	}

}
