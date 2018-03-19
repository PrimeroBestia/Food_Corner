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
}
