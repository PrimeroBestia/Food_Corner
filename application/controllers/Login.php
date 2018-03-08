<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	public function _constructor(){
		parent::_constructor();
		$this->load->model('customer_model','customer');
	}
	public function logins(){
		$data['title'] = 'Sign up';
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()===FALSE){
			$this->load->view('login/Login_Signup');
		}else{
			//Encryption
			$enc_pass = md5($this->input->post('password'));
			$resultU->customer->get_username($this->input->post('username'));
			$resultP->customer->get_password($this->input->post('username'));
		}
	}
	public function register(){
		$data['title'] = 'Sign up';
		$this->form_validation->set_rules('fname','Fname','required');
		$this->form_validation->set_rules('mname','Mname','required');
		$this->form_validation->set_rules('lname','Lname','required');
		$this->form_validation->set_rules('email','Emal','required');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('phone','Phone','required');
		$this->form_validation->set_rules('caddress','caddress','required');
		if($this->form_validation->run()===FALSE){
				$this->load->view('login/Login_Signup');
		}else{
			//Encryption
			$enc_pass = md5($this->input->post('password'));
		}
	}
}
?>
