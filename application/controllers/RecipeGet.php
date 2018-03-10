<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	public function _constructor(){
		parent::_constructor();
	}
	public function index(){
		redirect(base_url());
	}
	public function get_recipe(){
		
	}
}
?>
