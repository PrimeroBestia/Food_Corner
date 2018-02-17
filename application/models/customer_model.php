<?php

class customer_model extends CI_Model {

	private $table = "users";

	public function __construct() {
		parent:: __construct();
	}

	public function validate($data) {

		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get();
		echo $query->result_array();
		return $query->result_array();
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
}
