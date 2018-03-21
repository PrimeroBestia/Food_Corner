<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RecipeBook extends CI_Controller {
	public function _constructor(){
		parent::_constructor();
		$this->load->helper('url');
	}
	public function index()
	{	
		$data['regions'] = $this->region_model->get_region();
		if (isset($_SESSION['email'])) {
			$this->load->view('template/headerlogin');
			$this->load->view('Recipe2/RecipeBook',$data);
			$this->load->view('template/footer');
		}
		else{
			$this->load->view('template/header');
			$this->load->view('Recipe2/RecipeBook',$data);
			$this->load->view('template/footer');
		}	
	}
}
