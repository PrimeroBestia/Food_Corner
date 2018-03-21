<?php

class cart_model extends CI_Model {

	public function __construct() {
		parent:: __construct();
	}

	public function add_cart(){
		$data = array(
			'c_id' => $_SESSION['id'],
			'r_id' => $this->input->post('r_id'),
			'amount' => $this->input->post('amount')
		);
		return $this->db->insert('my_cart',$data);
	}

	public function get_cart(){
		$this->db->where('c_id', $_SESSION['id']);
		$this->db->from('my_cart');
		$this->db->join('recipe', 'recipe.r_id = my_cart.r_id');
    	$result = $this->db->get();
    	return $result->result_array();
	}
}
