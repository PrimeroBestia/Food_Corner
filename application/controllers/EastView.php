<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EastView extends CI_Controller {
	public function _constructor(){
		parent::_constructor();
		$this->load->helper('url');
	}
	public function index()
	{
		if (!isset($_SESSION['username'])) {
			$this->load->view('template/header');
			$this->load->view('Recipe2/Eastern');
			$this->load->view('template/footer');
		}
		else{
			$this->load->view('template/headerlogin');
			$this->load->view('Recipe2/Eastern');
			$this->load->view('template/footer');
		}	
	}
}
