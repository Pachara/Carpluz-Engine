<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CI_Customer extends CI_Controller{

	


public function verify_customer($phone_number){

		
		// Load Model
		$this->load->model('customer_model');
		
		// Verify Member
        return $this->customer_model->verify_customer($phone_number);
				
	}
	
public function get_user_info($phone_number){
	
		// Load Model
		$this->load->model('customer_model');
		
		// Get User Info
		return $this->customer_model->get_user_info($phone_number);
}


}


?>