<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	public function _constructor(){
		parent::_constructor();
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
			$this->customer_model->register($enc_pass);
			$this->session->set_flashdata('user_registered','Successfully Registered! and you can now log in');
			redirect('Welcome');
		}
	}
}
?>
