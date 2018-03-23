<?php

class order_model extends CI_Model {
	public function __construct() {
		parent:: __construct();
	}
	public function add_order(){
		$data = array(
			'c_id' => $_SESSION['id'],
			'order_status' => "Delivering",
			'address_id' => $this->input->post('address_id'),
			'order_price' => $this->input->post('price')
		);
		$this->db->insert('customer_order',$data);
		$result = $this->order_model->get_order();
		$recipes = $this->cart_model->get_cart();
		foreach($recipes as $recipe){
			$data2 = array(
				'list_id' => $result['order_id'],
				'r_id' => $recipe['r_id'],
				'price' => $recipe['price']
			);
			$this->db->insert('order_list',$data2);
		}
		$this->cart_model->delete_carts($_SESSION['id']);
		$data3 = array(
			'order_list_id' => $result['order_id']
		);
		$this->db->where('order_id',$result['order_id']);
		return $this->db->update('customer_order',$data3);
	}
	public function get_order(){
		$this->db->where('c_id',$_SESSION['id']);
		$this->db->order_by('order_date','DESC');
		$result = $this->db->get('customer_order');
		return $result->row_array(0);
	}
	public function get_orders(){
		$this->db->where('c_id',$_SESSION['id']);
		$this->db->order_by('order_date','DESC');
		$result = $this->db->get('customer_order');
		return $result->result_array();
	}
	public function get_all_orders(){
		$this->db->select('*');  
		$this->db->from('customer_order');
		$this->db->join('customer','customer.c_id = customer_order.c_id');
		$this->db->join('customer_address','customer.c_address_id = customer_address.caddress_id');
		$this->db->order_by('order_date','DESC');
		$result = $this->db->get();
		return $result->result_array();
	}
}
