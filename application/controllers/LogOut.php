<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogOut extends CI_Controller {
	public function _constructor(){
		parent::_constructor();
		$this->load->helper('url');
	}
	public function index()
	{
		if(isset($_SESSION)){
			session_destroy();
			session_start();
			redirect(base_url());
		}
		else{
			redirect(base_url());
		}
	}
}
