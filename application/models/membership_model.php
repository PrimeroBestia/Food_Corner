<?php

class Membership_model extends CI_Model {
	
	private $table = "users";

	public function __construct() {
		parent:: __construct();
		$this->load->database();
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
}