<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminView extends CI_Controller {
	public function __constructor(){
			parent::_constructor();
	}

	public function index(){
		if(isset($_SESSION['admin'])){
		if($_SESSION['admin']){
			$this->load->view('admin/admin');
		}
		else{
			redirect(base_url());
		}
		}
		else{
			redirect(base_url());
		}
	}

	public function delivery(){
		$this->load->view('admin/delivery');
	}

	public function recipe(){
		$this->load->view('admin/recipe');
	}

	public function users(){
		$this->load->view('admin/users');
	}

	public function add_recipe(){
		if($this->input->post('count')){
		$data['count']=$this->input->post('count');
		$data['ingredients']=$this->ingredients_model->get_ingredients();
		$data['regions']=$this->region_model->get_region();
		$this->load->view('admin/adrecipe',$data);
		}
		else{
			redirect('AdminView/recipe');
		}
	}
	public function add_recipes(){
		$this->recipe_model->add_recipes();
		redirect('AdminView/recipe');
	}
	public function add_ingredients(){
		$this->ingredients_model->add_ingredients();
		redirect('AdminView/recipe');
	}
	public function add_regions(){
		$this->region_model->add_region();
		redirect('AdminView/recipe');
	}
	public function add_ingredient(){
		$this->load->view('admin/adingredient');
	}

	public function add_region(){
		$this->load->view('admin/adregion');
	}

	public function usertab(){
		$result = $this->AdminView->read();
		$user = array();
		foreach ($result as $res){
			$info = array();
			$info['c_id'] = $res['c_id'];
			$info['c_email'] = $res['c_email'];
			$user[] = $info;
		}
		$data['user'] = $user;
		$this->load->view('admin/users',$data);
	}
}