<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Order extends CI_Controller {
	public function _constructor(){
		parent::_constructor();
	}
	public function index(){
		redirect(base_url());
	}
	public function add_order(){
		if(isset($_SESSION['email'])){
			$recipes = $this->cart_model->empty_cart();
			if(!$recipes){
				return $this->order_model->add_order();
				redirect(base_url());
			}
			else{
				redirect(base_url());
			}
		}
		else{
			redirect(base_url());
		}
	}
}
?>
