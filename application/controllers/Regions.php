<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regions extends CI_Controller {
	public function _constructor(){
		parent::_constructor();
		$this->load->helper('url');
	}
	public function index()
	{
			redirect(base_url());
	}
	public function region($region)
	{
		$data['recipes'] = $this->recipe_model->get_region($region);
		$data['region'] = $this->region_model->get_regions($region);
		if($this->recipe_model->get_region($region)){
			if (!isset($_SESSION['email'])) {
				$this->load->view('template/header');
				$this->load->view('Recipe2/Region',$data);
				$this->load->view('template/footer');
			}
			else{
				$this->load->view('template/headerlogin');
				$this->load->view('Recipe2/Region',$data);
				$this->load->view('template/footer');
			}
		}
		else{
			if (!isset($_SESSION['email'])) {
				$this->load->view('template/header');
				$this->load->view('Recipe2/Region',$data);
				$this->load->view('template/footer');
			}
			else{
				$this->load->view('template/headerlogin');
				$this->load->view('Recipe2/Region',$data);
				$this->load->view('template/footer');
			}
		}	
	}
}
