<?php

class cart_model extends CI_Model {

	public function __construct() {
		parent:: __construct();
	}

	public function add_cart(){
		$rid = $this->input->post('r_id');
		$id = $_SESSION['id'];
		if(!$this->cart_model->cart_exists($rid,$id)){
			$data = array(
				'c_id' => $id,
				'r_id' => $rid,
				'amount' => $this->input->post('quantity')
			);
			return $this->db->insert('my_cart',$data);
		}
		else{
			$result = $this->cart_model->get_carts($rid,$id);
			$result['amount'] = $result['amount']+$this->input->post('quantity');
			$data = array(
				'amount' => $result['amount']
			);
			$this->db->where('c_id',$id);
			$this->db->where('r_id',$rid);
			return $this->db->update('my_cart',$data);
		}
	}

	public function get_cart(){
		$this->db->where('c_id', $_SESSION['id']);
		$this->db->from('my_cart');
		$this->db->join('recipe', 'recipe.r_id = my_cart.r_id');
    	$result = $this->db->get();
    	return $result->result_array();
	}

	public function get_carts($rid,$id){
		$this->db->where('c_id',$id);
		$this->db->where('r_id',$rid);
		$result = $this->db->get('my_cart');
		return $result->row_array();
	}

	public function cart_exists($rid,$id){
		$this->db->where('c_id',$id);
		$this->db->where('r_id',$rid);
		$result = $this->db->get('my_cart');
		if($result->num_rows()==1){
			return true;
		}
		else{
			return false;
		}
	}
}
