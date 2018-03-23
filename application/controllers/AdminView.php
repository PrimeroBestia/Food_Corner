<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminView extends CI_Controller {
	public function __constructor(){
			parent::_constructor();
	}

	public function index(){
		if($_SESSION['admin']){
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
		if($_SESSION['admin']){
		$data['orders'] = $this->order_model->get_all_orders();
		$this->load->view('admin/delivery',$data);
		}
		else{
			redirect(base_url());
		}
	}

	public function recipe(){
		if($_SESSION['admin']){
		$this->load->view('admin/recipe');
		}
		else{
			redirect(base_url());
		}
	}

	public function users(){
		if($_SESSION['admin']){
		$this->load->view('admin/users');
		}
		else{
			redirect(base_url());
		}
	}

	public function add_recipe(){
		if($_SESSION['admin']){
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
		else{
			redirect(base_url());
		}
	}
	public function add_recipes(){
		if($_SESSION['admin']){
		$this->recipe_model->add_recipes();
		redirect('AdminView/recipe');
		}
		else{
			redirect(base_url());
		}
	}
	public function add_ingredients(){
		if($_SESSION['admin']){
		$this->ingredients_model->add_ingredients();
		redirect('AdminView/recipe');
		}
		else{
			redirect(base_url());
		}
	}
	public function add_regions(){
		if($_SESSION['admin']){
		$this->region_model->add_region();
		redirect('AdminView/recipe');
		}
		else{
			redirect(base_url());
		}
	}
	public function add_ingredient(){
		if($_SESSION['admin']){
		$this->load->view('admin/adingredient');
		}
		else{
			redirect(base_url());
		}
	}

	public function add_region(){
		if($_SESSION['admin']){
		$this->load->view('admin/adregion');
		}
		else{
			redirect(base_url());
		}
	}

	public function usertab(){
		if($_SESSION['admin']){
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
		else{
			redirect(base_url());
		}
	}
}