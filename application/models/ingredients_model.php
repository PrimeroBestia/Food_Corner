<?php

class ingredients_model extends CI_Model {

	public function __construct() {
		parent:: __construct();
	}

	public function ingredients(){

		$this->db->select('*');
		$this->db->from('suppliers');
		$this->db->where('s_id', $suppliers);
		$query = $this->db->get();
		return $query->result_array();
		$this->db->select('*');
		$this->db->from('ingredients');
		$query=$this->db->get();
		return $query->result_array();
	}
	public function add_ingredients(){
		$data = array(
			'ing_name' => $this->input->post('ing_name'),
			'ing_unit' => $this->input->post('ing_unit')
		);
		return $this->db->insert('ingredients',$data);
	}
	public function update_ingredients($suppliers){
		$query=$this->db->query("UPDATE ing_id FROM ingredients where s_id = ".$suppliers);
		if($query->num_row()>0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}public function delete_ingredients($suppliers){
		$query=$this->db->query("DELETE ing_id FROM ingredients where s_id = ".$suppliers);
		if($query->num_row()==NULL){
			return $query->result();
		}
		else{
			return 1;
		}
	}
	public function get_ingredients(){
		$result=  $this->db->get('ingredients');
		return $result->result_array();
	}

}
