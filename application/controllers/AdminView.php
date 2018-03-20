<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminView extends CI_Controller{

	public function _constructor(){
		parent::_constructor();
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('admin/admin');
	}
}