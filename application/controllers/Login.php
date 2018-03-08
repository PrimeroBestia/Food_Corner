<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	public function _constructor(){
		parent::_constructor();
		$this->load->model('customer_model','customer');
	}
	public function index()
	{
	$resultU = $this->customer->get_username($_SESSION['username']);
	$resultP = $this->custumer->get_password($_SESSION['username']);
	if($resultU===NULL){
		$_SESSION['result']="Invalid Login!";
		$this->load->view('Login_Signup');
	}
	else if($resultP===$session['password']){
		$this->load->view('LoginHomePage');
	}
	else{
		echo "hello";
	}
	}
}
