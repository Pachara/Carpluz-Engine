<?php

/*
 * @author: Alysson Ajackson
 * @date: Wed Apr 10 22:11:22 BRT 2013
 * */
class Otp_model extends CI_Model {

    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    
    function verify_customer($phone_number = null){

	   if($phone_number==null)
       	$phone_number = $this->input->post('phone_number');
       
       if($phone_number == null)
       	return false;
       	
       
       
       $query = $this->db->query('SELECT * FROM customers where phone_number = "'.$phone_number.'" ');
       
       if($query->num_rows() > 0)
       	return true;
       
       return false;
       
              
    }
    
    function save_otp($phone_number,$otp_password){
    
    
    
    	// Verify is Member first
    	// If True
    	if($this->verify_customer($phone_number)){
	    	
	    	// Get Customer Id
    		$row = $this->get_customer_info_by_phone($phone_number);
    		
    		
    		
    		//Build Data to Update
    		$data = array(
    			'customer_id' => $row->id,
    			'password' => $otp_password,
    			'date'	=> date('Y-m-d H:i:s')
            );
  
           
          if($this->db->insert('otp', $data)){
	          return true;
          }else{
	          return false;
          }
	
	    	
    	}
    	else{
	    	return false;
    	}
    	
	   	    
	    
    }
    
    
    function get_customer_info_by_phone($phone_number){

        
       $query = $this->db->query('SELECT * FROM customers where phone_number = "'.$phone_number.'" ');
       return $query->row();
       
       
     }
    
    
    function get_data(){

       $phone_number = $this->input->post('phone_number');
       
       if($phone_number == null)
       	return false;
       	
       
     
       $query = $this->db->query('SELECT * FROM customers where phone_number = "'.$phone_number.'" ');
       
       
       return $query->result_array();
        
              
    }

}