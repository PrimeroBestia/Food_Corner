<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileView extends CI_Controller {
	public function _constructor(){
		parent::_constructor();
		$this->load->helper('url');
	}
	public function index()
	{	
		$data['user']=$this->customer_model->get_user();
		if(isset($_SESSION['email'])){
			$this->load->view('template/headerlogin');
			$this->load->view('profile/profile',$data);
			$this->load->view('template/footer');
		}
		else{
			redirect(base_url());
		}
	}

	public function update_user(){
		$this->customer_model->update_user();
		redirect(base_url('ProfileView/index'));
	}
	public function addresses()
	{
		if(isset($_SESSION['email'])){
			$this->load->view('template/headerlogin');
			$this->load->view('UserProfile/addresses');
			$this->load->view('template/footer');
		}
		else{
			redirect(base_url());
		}
	}
	public function bankcards()
	{
		if(isset($_SESSION['email'])){
			$this->load->view('template/headerlogin');
			$this->load->view('UserProfile/bankcards');
			$this->load->view('template/footer');
		}
		else{
			redirect(base_url());
		}
	}
	public function cart()
	{
		if(isset($_SESSION['email'])){
			$this->load->view('template/headerlogin');
			$this->load->view('UserProfile/cart');
			$this->load->view('template/footer');
		}
		else{
			redirect(base_url());
		}
	}
	public function changepw()
	{
		if(isset($_SESSION['email'])){
			$this->load->view('template/headerlogin');
			$this->load->view('UserProfile/changepw');
			$this->load->view('template/footer');
		}
		else{
			redirect(base_url());
		}
	}
	public function mp_cancelled()
	{
		$data['orders'] = $this->order_model->get_orders();
		if(isset($_SESSION['email'])){
			$this->load->view('template/headerlogin');

			$this->load->view('UserProfile/mp-cancelled',$data);

			$this->load->view('template/footer');
		}
		else{
			redirect(base_url());
		}
	}
	public function mypurchase()
	{
		$data['orders'] = $this->order_model->get_orders();
		if(isset($_SESSION['email'])){
			$this->load->view('template/headerlogin');
			$this->load->view('UserProfile/mypurchase',$data);
			$this->load->view('template/footer');
		}
		else{
			redirect(base_url());
		}
	}
	public function mp_completed()
	{
		$data['orders'] = $this->order_model->get_orders();
		if(isset($_SESSION['email'])){
			$this->load->view('template/headerlogin');
			$this->load->view('UserProfile/mp-completed',$data);
			$this->load->view('template/footer');
		}
		else{
			redirect(base_url());
		}
	}
	public function mp_torecieved()
	{
		$data['orders'] = $this->order_model->get_orders();
		if(isset($_SESSION['email'])){
			$this->load->view('template/headerlogin');
			$this->load->view('UserProfile/mp-torecieved',$data);
			$this->load->view('template/footer');
		}
		else{
			redirect(base_url());
		}
	}
	public function myaccount()
	{
		if(isset($_SESSION['email'])){
			$this->load->view('template/headerlogin');
			$this->load->view('UserProfile/myaccount');
			$this->load->view('template/footer');
		}
		else{
			redirect(base_url());
		}
	}
	public function mycart()
	{
		if(isset($_SESSION['email'])){
			$this->load->view('template/headerlogin');
			$this->load->view('UserProfile/mycart');
			$this->load->view('template/footer');
		}
		else{
			redirect(base_url());
		}
	}
	public function profile_edit()
	{
		$data['user']=$this->customer_model->get_user();
		if(isset($_SESSION['email'])){
			$this->load->view('template/headerlogin');
			$this->load->view('UserProfile/profile',$data);
			$this->load->view('template/footer');
		}
		else{
			redirect(base_url());
		}
	}

	public function profile_update(){
		$this->customer_model->update_users();
		redirect(base_url('ProfileView/index'));
	}
}
