<?php

class customer_model extends CI_Model {

	public function __construct() {
		parent:: __construct();
	}

	public function validate($data) {
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get();
		echo $query->result_array();
		return $query->result_array();
	}
	public function get_password($username){
			$query=$this->db->query("SELECT c_pass FROM customer where c_id = ".$username);
			if($query->num_row()>0){
				return $query->result();
			}
			else{
				return NULL;
			}
	}
	public function get_cid($username){
		$this->db->where('c_email',$username);
		$query = $this->db->get('customer');
		return $query->row_array(0)['c_id'];
	}
	public function update_username($username){
		$query=$this->db->query("UPDATE c_id FROM customer where c_id = ".$username);
		if($query->num_row()>0){
			return $query->result();
		}
		else{
			return NULL;
		}
	}public function delete_username($username){
		$query=$this->db->query("DELETE c_id FROM customer where c_id = ".$username);
		if($query->num_row()==NULL){
			return $query->result();
		}
		else{
			return 1;
		}
	}
	public function register($enc_pass){
		$user = 'user';
		$data = array(
			'c_fname' =>$this->input->post('fname'),
			'c_mname' =>$this->input->post('mname'),
			'c_lname' =>$this->input->post('lname'),
			'c_email' =>$this->input->post('email'),
			'c_pass' =>md5($enc_pass),
			'c_pno' =>$this->input->post('phone'),
			'acc_type' =>$user
		);
		$this->db->insert('customer',$data);
		$query=$this->db->get_where('customer',array('c_email' =>$this->input->post('email')));
		$data = array(
			'c_address_id' => $query->row_array(0)['c_id']
		);
		$this->db->where('c_id',$query->row_array(0)['c_id']);
		$this->db->update('customer',$data);
	}
	public function check_username_exists($username){
		$query=$this->db->get_where('customer',array('c_id'=>$username));
		if(empty($query->row_array())){
			return true;
		}
		else{
			return false;
		}
	}
	public function get_user(){
		$query=$this->db->get_where('customer',array('c_id'=>$_SESSION['id']));
		return $query->row_array(0);
	}
	public function get_address(){
		$query=$this->db->get_where('customer_address',array('c_id'=>$_SESSION['id']));
		return $query->result_array();
	}
	public function is_admin(){
		$query=$this->db->get_where('customer',array('c_id'=>$_SESSION['id']));
		if($query->row_array(0)['acc_type']=="admin"){
			return true;
		}
		else{
			return false;
		}
	}
	public function check_email_exists($email){
		$query=$this->db->get_where('customer',array('c_email'=>$email));
		if(empty($query->row_array())){
			return true;
		}
		else{
			return false;
		}
	}
	public function address_insert($username){
		$query=$this->db->get_where('customer',array('c_email'=>$username));
		$address=$query->row_array(0)['c_id'];
		$data = array(
			'caddress_id' =>$address,
			'c_id' =>$address,
			'address' =>$this->input->post('caddress'),
			'address_id' =>1
		);
		return $this->db->insert('customer_address',$data);
	}
	public function check_username($username){
		$query=$this->db->get_where('customer',array('c_id'=>$username));
		if(empty($query->row_array())){
			return false;
		}
		else{
			return true;
		}
	}
	public function check_account($password,$email){
		$this->db->where('c_email',$email);
		$pas = md5($password);
		$result = $this->db->get('customer');
		if($result->num_rows() == 1){
			$hass = $result->row_array(0)['c_pass'];
			if($pas == $hass){
				return true;
			} 
			else{
				return false;
			}
		}
		else{
			return false;
		}
	}
	public function update_pass(){
		$this->db->where('c_id',$_SESSION['id']);
		$res=$this->db->get('customer');
		$result= $res->row_array(0)['c_pass'];
		$enc_pass=md5($this->input->post('pass'));
		$pass1=md5($this->input->post('npass'));
		$pass2=md5($this->input->post('cpass'));
		if($enc_pass==$result){
			if($pass1==$pass2){
				$data = array('c_pass'=>$pass1);
				$this->db->where('c_id',$_SESSION['id']);
				$this->db->update('customer',$data);
				$_SESSION['alert']="Password Updated";
				redirect(base_url('ProfileView/changepw'));
			}
			else{
				$_SESSION['alerts']="Password Mismatch";
				redirect(base_url('ProfileView/changepw'));
			}
		}
		else{
			$_SESSION['alerts']="Incorrect Password";
			redirect(base_url('ProfileView/changepw'));
		}
	}
	public function update_user(){
		$data =array(
			'c_fname' => $this->input->post('fname'),
			'c_mname' => $this->input->post('mname'),
			'c_lname' => $this->input->post('lname')
		);
		$this->db->where('c_id',$_SESSION['id']);
		return $this->db->update('customer',$data);
	}
	public function update_users(){
		$data =array(
			'c_fname' => $this->input->post('fname'),
			'c_mname' => $this->input->post('mname'),
			'c_lname' => $this->input->post('lname'),
			'c_pno' => $this->input->post('pno')
		);
		$this->db->where('c_id',$_SESSION['id']);
		return $this->db->update('customer',$data);
	}
}
