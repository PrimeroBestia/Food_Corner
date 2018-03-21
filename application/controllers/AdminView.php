<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminView extends CI_Controller {
	public function _constructor(){
		parent::_constructor();
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('admin/admin');
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
}