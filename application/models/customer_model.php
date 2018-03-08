<?php

class customer_model extends CI_Model {

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
	public function update_username($username){
		$query=$this->db->query("UPDATE c_id FROM customer where c_id = ".$username);
		if($query->num_row()>0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}public function delete_username($username){
		$query=$this->db->query("DELETE c_id FROM customer where c_id = ".$username);
		if($query->num_row()==NULL){
			return $query->result();
		}
		else{
			return 1;
		}
	}
	public function register($enc_pass){
		$user = 'user';
		$data = array(
			'c_fname' =>$this->input->post('fname'),
			'c_mname' =>$this->input->post('mname'),
			'c_lname' =>$this->input->post('lname'),
			'c_email' =>$this->input->post('email'),
			'c_id' =>$this->input->post('username'),
			'c_pass' =>$enc_pass,
			'c_pno' =>$this->input->post('phone'),
			'acc_type' =>$user
		);
		return $this->db->insert('customer',$data);
	}
}
