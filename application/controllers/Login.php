<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	public function _constructor(){
		parent::_constructor();
	}
	public function index()
	{
	$this ->load->model("customer_model");
	$resultU = get_username($_session['username']);
	$resultP = get_password($_session['username']);
	if($resultU==NULL){
		echo "Invalid Login";
	}
	else if($resultP==$session['password']){
		$this->load->view('LoginHomePage');
	}
	}
}
