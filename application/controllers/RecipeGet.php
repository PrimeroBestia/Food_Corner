<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class RecipeGet extends CI_Controller {
	public function _constructor(){
		parent::_constructor();
	}
	public function index(){
		redirect(base_url());
	}
	public function get_recipe($r_id){
		$recipe = $this->recipe_model->get_recipe($r_id);
		$data['recipe'] = $recipe;
		print_r($recipe);
		$inglist = $recipe['ing_list_id'];
		$ingridients = $this->recipe_model->get_ingridients($inglist);
		print_r($ingridients);
		$data['recipe'] = $recipe;
		$data['ingridients'] =$ingridients;
	}
}
?>
