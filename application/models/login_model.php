<?php

/*
 * @author: Alysson Ajackson
 * @date: Wed Apr 10 22:11:22 BRT 2013
 * */
class Login_model extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
   public function check_OTP_password($phone_number,$otp_password){
	
		$this->db->select('*');
		$this->db->from('customers');
		$this->db->where('phone_number',$phone_number);
		$this->db->join('otp', 'customers.id = otp.customer_id');
		$this->db->order_by("otp.id", "desc");
		$this->db->limit(1);
		$query = $this->db->get();
		$result = $query->row_array();
		
				
		
		if($query->num_rows() > 0){
			if($result["password"] == $otp_password)
				return true;
		}
			
			return false;


	}    
	
	public function login($phone_number,$verified = false){
	
		if($verified == true){
			$this->db->select('*');
			$this->db->from('customers');
			$this->db->where('phone_number',$phone_number);
			$query = $this->db->get();
			$result = $query->row_array(); 
			$this->load->library('session');
			$this->session->set_userdata($result);
			
			return true;
			
		}else{
			return false;
		}
	
		
	}
    
    
   
}