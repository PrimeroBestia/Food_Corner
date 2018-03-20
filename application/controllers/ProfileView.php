<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileView extends CI_Controller {
	public function _constructor(){
		parent::_constructor();
		$this->load->helper('url');
	}
	public function index()
	{	
		if(isset($_SESSION['email'])){
			$this->load->view('template/headerlogin');
			$this->load->view('profile/profile');
			$this->load->view('template/footer');
		}
		else{
			redirect(base_url());
		}
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
		if(isset($_SESSION['email'])){
			$this->load->view('template/headerlogin');

			$this->load->view('UserProfile/mp-cancelled');

			$this->load->view('template/footer');
		}
		else{
			redirect(base_url());
		}
	}
	public function mp_completed()
	{
		if(isset($_SESSION['email'])){
			$this->load->view('template/headerlogin');
			$this->load->view('UserProfile/mp-completed');
			$this->load->view('template/footer');
		}
		else{
			redirect(base_url());
		}
	}
	public function mp_topay()
	{
		if(isset($_SESSION['email'])){
			$this->load->view('template/headerlogin');
			$this->load->view('UserProfile/mp-topay');
			$this->load->view('template/footer');
		}
		else{
			redirect(base_url());
		}
	}
	public function mp_torecieved()
	{
		if(isset($_SESSION['email'])){
			$this->load->view('template/headerlogin');
			$this->load->view('UserProfile/mp-torecieved');
			$this->load->view('template/footer');
		}
		else{
			redirect(base_url());
		}
	}
	public function mp_toship()
	{
		if(isset($_SESSION['email'])){
			$this->load->view('template/headerlogin');
			$this->load->view('UserProfile/mp-toship');
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
	public function mypurchase()
	{
		if(isset($_SESSION['email'])){
			$this->load->view('template/headerlogin');
			$this->load->view('UserProfile/mypurchase');
			$this->load->view('template/footer');
		}
		else{
			redirect(base_url());
		}
	}
	public function profile()
	{
		if(isset($_SESSION['email'])){
			$this->load->view('template/headerlogin');
			$this->load->view('UserProfile/profile');
			$this->load->view('template/footer');
		}
		else{
			redirect(base_url());
		}
	}


}
