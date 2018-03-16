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
		print_r($recipe);
	}
}
?>
