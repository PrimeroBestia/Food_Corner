<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WestView extends CI_Controller {
	public function _constructor(){
		parent::_constructor();
		$this->load->helper('url');
	}
	public function index()
	{
		$data['recipes'] = $this->recipe_model->get_west();
		if (!isset($_SESSION['email'])) {
			$this->load->view('template/header');
			$this->load->view('Recipe2/Western',$data);
			$this->load->view('template/footer');
		}
		else{
		$data['recipes'] = $this->recipe_model->get_west();
			$this->load->view('template/headerlogin');
			$this->load->view('Recipe2/Western',$data);
			$this->load->view('template/footer');
		}	
	}
}
