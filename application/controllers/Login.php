<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	public function _constructor(){
		parent::_constructor();
	}
	public function index(){
		redirect(base_url());
	}
	public function logins(){
		$data['title'] = 'Sign up';
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()===FALSE){
			$this->load->view('login/Login_Signup');
		}else{
			$username = $this->input->post('email');
			$password = $this->input->post('password');
			if($this->customer_model->check_account($password,$username)){
			session_start();
			$_SESSION['email'] = $this->input->post('email');
			$_SESSION['alert'] = "You have Successfully been Logged In.";
			redirect('Welcome');
			}
			else{
				$this->session->set_flashdata('wrong','You have entered an invalid Username/Email or Password');
				$this->load->view('login/Login_Signup');
			}
		}
	}
	public function register(){
		$data['title'] = 'Sign up';
		$this->form_validation->set_rules('email','Emal','required|callback_check_email');
		$this->form_validation->set_rules('username','username','required|callback_check_username');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('cpassword','Confirm Password','matches[password]');
		$this->form_validation->set_rules('phone','Phone','required');
		$this->form_validation->set_rules('caddress','Address','required');
		if($this->form_validation->run()===FALSE){
				$this->load->view('login/Signups');
		}else{
			//Encryption
			session_start();
			$enc_pass = $this->input->post('password');
			$this->customer_model->register($enc_pass);
			$this->customer_model->address_insert($this->input->post('username'));
			$_SESSION['alert'] = "Successfully Registered! and you can now log in";
			redirect('Welcome');
		}
	}
	function check_username($username){
		$this->form_validation->set_message('check_username','That username exists. Please choose a different one');
		if($this->customer_model->check_username_exists($username)){
			return true;
		}else{
			//Encryption
			return false;
		}
	}
	function check_email($email){
		$this->form_validation->set_message('check_email','Email already in use. Please choose a different one');
		if($this->customer_model->check_email_exists($email)){
			return true;
		}else{
			//Encryption
			return false;
		}
	}
	function check_usernames($username){
		$this->form_validation->set_message('check_usernames','The Username is wrong.');
		if($this->customer_model->check_username($username)){
			return true;
		}else{
			//Encryption
			return false;
		}
	}
	function check_password($username){
		$password = md5($this->input->post('password'));
		$this->form_validation->set_message('check_password','The Password is wrong');
		if($this->customer_model->check_password($password)){
			return true;
		}else{
			return false;
		}
	}
}
?>
