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
	public function get_username(){
		$query=$this->db->query("SELECT * c_id FROM customer");
		if($query->num_row()>0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}
	public function get_password(){
			$query=$this->db->query("SELECT * c_pass FROM customer");
			if($query->num_row()>0){
				return $query->result();
			}
			else{
				return NULL;
			}
	}
}
