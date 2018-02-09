<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	public function _constructor(){
		parent::_constructor();
	}
	public function index()
	{
  $username = $this->input->get("username");
  $password = $this->input->get("password");
    if($username == NULL){
      $this->load->view("LoginWrong");
    }
    else{
      $this->load->model("customer_model");
      
    }
	}
}
