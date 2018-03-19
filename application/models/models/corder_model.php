<?php

class caddress_model extends CI_Model{
	publick function __construct()
			parent:: __construct();
	}

	public function validate($data) {

		$this->db->select('*');
		$this->db->from('customer');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query=$this->db->get();
		$data[post]=$query->result_array();
		$this->db->select('*');
		$this->db->from('customer_order');
		$this->db->where('c_id', $post->c_id);
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
		public function update_order($username){
		$query=$this->db->query("UPDATE order_id FROM customer_order where c_id = ".$username);
		if($query->num_row()>0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}public function delete_order($username){
		$query=$this->db->query("DELETE order_id FROM customer_order where c_id = ".$username);
		if($query->num_row()==NULL){
			return $query->result();
		}
		else{
			return 1;
		}
	}

}