<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CI_Price extends CI_Controller{



	public function __construct()
    {
            parent::__construct();
    }

	function price_view_text($days,$price){
	
		if($days == 2){
			return "วันละ ".number_format($price)." บาท <span class='mini_price' >( ลดเมื่อเช่า > 3 วัน )</span><br/> 
			<span class='mini_price' >รวม ".$days." วันเป็นเงิน &nbsp;".number_format($this->get_discount($days,$price) * $days)." บาท</span>";
		}
		elseif($days < 2)
			return "วันละ ".number_format($price)." บาท <span class='mini_price' >( ลดเมื่อเช่า > 3 วัน )</span>";
		elseif($days >= 3){
			return "วันละ ".number_format($this->get_discount($days,$price))." บาท <span class='mini_price2' >( ปกติ ".number_format($price)." บาท )</span> <br/> 
			<span class='mini_price' >รวม ".$days." วันเป็นเงิน &nbsp;".number_format($this->get_discount($days,$price) * $days)." บาท</span>";
		}
		
	}
	
	
	public function get_price($post){
	
			// Transform array into variable
			extract($post);
			
			
			
			// Loading Config File
			
			// Load Config File for each Province
            $this->config->load('config_landing');
			// Get Car price from config file
			$config	=  $this->config->item("รถเช่า".$get_province);
			
			
			
			// Get Number of days
			$data["days"] = $this->get_day($start_date,$start_time,$end_date,$end_time);
			
			
			// Get Normal Price per day
			$data["normal_price_per_day"] 	= $config[$car_type];
			// Calulate total normal price
			$data["total_normal_price"] 		= $data["normal_price_per_day"] * $data["days"];
			
			// Get Check if have discount
			$data["have_discount"] = FALSE;
			if($data["days"] >= 3)
				$data["have_discount"] = TRUE;
			
			
			// Get Discount per day
			// Callculate Discount Range
			if($data["days"] < 3)
				$data["discount_per_day"]					=	0;
			if($data["days"] >= 3)
				$data["discount_per_day"]					=	$config["dis_3"];
			if($data["days"] >= 5)
				$data["discount_per_day"]					=	$config["dis_5"];
			if($data["days"] >= 7)
				$data["discount_per_day"]					=	$config["dis_7"];
			if($data["days"] >= 10)
				$data["discount_per_day"]					=	$config["dis_10"];
			if($data["days"] >= 15)
				$data["discount_per_day"]					=	$config["dis_15"];
			if($data["days"] >= 30)	
				$data["discount_per_day"]					=	$config["dis_30"];
				
			// Get Total Discount
			$data["total_discount"]								=	$data["discount_per_day"] * $data["days"];
			
			// Get After Discount price per day
			$data["price_after_discount_per_day"]	=	$data["normal_price_per_day"] - $data["discount_per_day"];
			
			// Get Total Price after discount
			$data["total_price_after_discount"]			=	$data["price_after_discount_per_day"] * $data["days"];
			
			// Get baby seat price
			$data["baby_seat_price"]							=	$config["baby_seat"];
			
			
			
	
			return $data;
	
		
	}
	
	
	// Get number of rental days also process late return and rent less than 1 day
	// Return Number of days 
	
	public function get_day($start_date,$start_time,$end_date,$end_time){
		
		// Process Date Diff
		$date1		=	date_create($start_date." ".$start_time);
		$date2		=	date_create($end_date." ".$end_time);
		$diff			=	date_diff($date1,$date2);
		
		
		// Store number of Days in Varialble 
		$days		= 	$diff->days;


		// Less than 1 days example : 18 hours
        if(($diff->days == 0) and (($diff->h >= 0) or ($diff->i >= 0))){    
	        $days 		+= 1;            
        }
        
        // Over Time Return
        if(($diff->days >= 1) and ($diff->h >= 3) and ($diff->i >= 0)){
	        $days 		+= 1;        
        }
		
		return $days;
	
		
		
	}
	
	// Return Wheather customer return car late more than 3 hours or not
	// If Customer rent less than 1 day it will be return false
	public function check_late_return($start_date,$start_time,$end_date,$end_time){
	
		// Process Date Diff
		$date1		=	date_create($start_date." ".$start_time);
		$date2		=	date_create($end_date." ".$end_time);
		$diff			=	date_diff($date1,$date2);
		
		if($diff->days > 0){
			
			// Over Time Return
	        if(($diff->h >= 3) and ($diff->i >= 0)){
		        return true;        
	        }   
	        return false;				
		}else{
			return false;
		}
		
		
	}
	public function get_discount($days,$price,$car_type = null){
	
		switch($days)
	    {
	    	case ($days >= 5):
		    return (($days * $price) - ($days * 200)) / $days;
		    break;
		    
		    case ($days >= 3):
		    return (($days * $price) - ($days * 100)) / $days;
		    break;
		    
	    	case ($days < 3):
		    return $price;
		    break;
		    
		    
		
		    
			
		}


}
}


?>