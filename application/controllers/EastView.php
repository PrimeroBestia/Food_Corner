<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EastView extends CI_Controller {
	public function _constructor(){
		parent::_constructor();
		$this->load->helper('url');
	}
	public function index()
	{
		$data['recipes'] = $this->recipe_model->get_east();
		if (!isset($_SESSION['email'])) {
			$this->load->view('template/header');
			$this->load->view('Recipe2/Eastern',$data);
			$this->load->view('template/footer');
		}
		else{
			$this->load->view('template/headerlogin');
			$this->load->view('Recipe2/Eastern',$data);
			$this->load->view('template/footer');
		}	
	}
}
