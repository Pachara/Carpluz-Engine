<?php

/*
 * @author: Alysson Ajackson
 * @date: Wed Apr 10 22:11:22 BRT 2013
 * */
class Customer_model extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
   public function verify_customer($phone_number){
	
		$this->db->select('*');
		$this->db->from('customers');
		$this->db->where('phone_number',$phone_number);
		$this->db->limit(1);
		$query = $this->db->get();
		$result = $query->row_array();
		
				
		
		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
			


	}
	
	public function get_user_info($phone_number){
	
		$this->db->select('*');
		$this->db->from('customers');
		$this->db->where('phone_number',$phone_number);
		$this->db->limit(1);
		$query = $this->db->get();
		$result = $query->row_array();
		
		return $result;
		
		
		
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