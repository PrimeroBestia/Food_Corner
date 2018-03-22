<?php

class recipe_model extends CI_Model {

	public function __construct() {
		parent:: __construct();
	}

	 public function recipe(){

	 	$query = $this->db->get('recipe');
		$query_result = $query->result();
		return $query_result;
	}

	public function read_order_spec($rec){

		$this->db->select('*');
		$this->db->from('recipe');
		$this->db->where('r_id', $rec);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	
	public function upadte_suppliers($id,$rec){

		$this->db->where('r_id', $id);
		$this->db->update('recipe', $rec);
	}
    
    public function delete_suppliers($rec){

    	$this->db->select('*');
		$this->db->from('recipe');
		$this->db->where('r_id', $rec);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
    }

    public function get_region($region){
    	$this->db->where('r_id_region',$region);
		$result = $this->db->get('recipe');
		return $result->result_array();
    }
    public function get_recipe($id){
    	$this->db->select('*');
    	$this->db->where('recipe.r_id',$id);    
		$this->db->from('recipe');
		$this->db->join('region', 'recipe.r_id_region = region.region_id');
		$result = $this->db->get();
		return $result->row_array();
    }
    public function get_ingridients($ingid){
    	$this->db->select('*');
    	$this->db->where('ingridients_list.ing_list_id',$ingid);    
		$this->db->from('ingridients_list');
		$this->db->join('ingredients', 'ingredients.ing_id = ingridients_list.ing_id');
    	$result = $this->db->get();
		return $result->result_array();
    }
}
