<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignupView extends CI_Controller {
	public function _constructor(){
		parent::_constructor();
		$this->load->helper('url');
	}
	public function index()
	{
		redirect(base_url());
	}
}
