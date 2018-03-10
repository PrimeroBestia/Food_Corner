<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginView extends CI_Controller {
	public function _constructor(){
		parent::_constructor();
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('login/Login_Signup');
	}
}
