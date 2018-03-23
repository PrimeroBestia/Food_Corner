<?php
class admin_user extends CI_Model{
	private $user = "customer";
	public function __construct(){
		parent:: __construct();
	}

	public function read(){
		$this->db->select("*");
		$this->db->from($this->user);
		$query = $this->db->get();
		return $query->result_array();
	}

}