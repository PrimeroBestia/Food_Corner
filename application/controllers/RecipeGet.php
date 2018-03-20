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
		$inglist = $recipe['ing_list_id'];
		$ingridients = $this->recipe_model->get_ingridients($inglist);
		$data['recipe'] = $recipe;
		$data['ingridients'] =$ingridients;
		if($this->recipe_model->get_recipe($r_id)){
		if (isset($_SESSION['username'])) {
			$this->load->view('template/headerlogin');
			$this->load->view('Recipe2/RecipePage',$data);
			$this->load->view('template/footer');
		}
		else{
			$this->load->view('template/header');
			$this->load->view('Recipe2/RecipePage',$data);
			$this->load->view('template/footer');
		}
		}
		else{
			redirect(base_url());
		}	
	}
}
?>
