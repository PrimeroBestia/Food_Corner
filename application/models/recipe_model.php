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
    public function add_recipes(){
    	$data = array(
    		'r_name'=>$this->input->post('recipe_title'),
    		'r_type'=>$this->input->post('recipe_type'),
    		'r_id_region'=>$this->input->post('region'),
    		'r_country'=>$this->input->post('recipe_country'),
    		'recipe_text'=>$this->input->post('recipe_inst'),
    		'r_description'=>$this->input->post('recipe_desc'),
    		'r_price'=>$this->input->post('recipe_price'),
    		'r_time'=>$this->input->post('recipe_time'),
    		'r_serve'=>$this->input->post('recipe_serve')
    	);
    	$this->db->insert('recipe',$data);
    	$rid=$this->recipe_model->get_recipe_id();
    	$data1 = array(
    		'ing_list_id' => $rid
    	);
    	$this->db->where('r_id',$rid);
    	$this->db->update('recipe',$data1);
    	$ingred = $this->input->post('ingred');
    	$amount = $this->input->post('ing_amount');
    	foreach ($ingred as $num => $ing) {
    		$data = array(
    			'ing_list_id' => $rid,
    			'ing_id' => $ing,
    			'amount' => $amount[$num]
    		);
    		$this->db->insert('ingridients_list',$data);
    	}
    	return true;
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
    public function get_recipe_id(){
    	$this->db->order_by('r_time_created','DESC');
		$result = $this->db->get('recipe');
		return $result->row_array(0)['r_id'];
    }
}
