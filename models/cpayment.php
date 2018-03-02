<?php

class caddress_model extends CI_Model{
	publick function __construct()
			parent:: __construct();
	}

	public function customer_payment(){

		$this->db->select('*');
		$this->db->from('customer');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query=$this->db->get();
		return=$query->result_array();
		$this->db->select('*');
		$this->db->from('customer_payment');
		$query=$this->db->get();
		return=$query->result_array();
	}
	public function get_password($username){
			$query=$this->db->query("SELECT c_pass FROM customer where c_id = ".$username);
			if($query->num_row()>0){
				return $query->result();
			}
			else{
				return NULL;
			}
	}
	public function get_username($username){
		$query=$this->db->query("SELECT c_id FROM customer where c_id = ".$username);
		if($query->num_row()>0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
		public function update_payment($username){
		$query=$this->db->query("UPDATE payment_id FROM customer_payment where c_id = ".$username);
		if($query->num_row()>0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}public function delete_payment($username){
		$query=$this->db->query("DELETE payment_id FROM customer_payment where c_id = ".$username);
		if($query->num_row()==NULL){
			return $query->result();
		}
		else{
			return 1;
		}
	}

}