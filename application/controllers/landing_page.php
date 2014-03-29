<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Landing_Page extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function __construct()
    {
            parent::__construct();
            
            // Setup Language
            $lang = "th";
            
            // Load Price Class
            $this->load->library('price');
            $this->load->library('pachara');
            $this->load->helper('url');
            
            
            
            // Process URL Parameter
            $this->params = $this->uri->segment_array();
            
             if(isset($this->params[1])){
             	
             	$this->rental_page = $this->params[1];
	            if($this->params[1] == "รถเช่านครศรีฯ")
	            	$this->rental_page = "รถเช่านครศรีธรรมราช";
             }   	
            else{
	            $this->rental_page = "รถเช่านครศรีธรรมราช";
            }
            
            
            
               	
            	
           
            
            // Load Config File for each Province
            $this->config->load('config_landing');
            
            // Load Config File in to Array
            $config	=  $this->config->item($this->rental_page);
            
            
                      
            // General Infomations
            $this->data["lang"]						= $lang;
            $this->data["site"]							= $this->config->base_url()."/".$this->rental_page;
            $this->data["site_url"]					= $this->config->base_url().$this->rental_page;
            $this->data["target"] 					= str_replace($this->config->item("clean_url_prefix"), "", $this->rental_page);
            $this->data["google"]					= $config["google_analytic"];
            $this->data["google_verify"]			= $config["google-site-verification"];
            $this->data["phone_number"] 		= $config["phone_number"];
            $this->data["phone_number_for_call"] 		= $config["phone_number_for_call"];
            $this->data["email"] 						= $config["email"];
            $this->data["deposit"]					= $config["deposit"];
            $this->data["fb_graph_url"] 			= $config["fb_graph_url"];
            $this->data["fb_url"]						= $config["fb_url"];
            $this->data["operate_time"]			= $config["operate_time"];
			$this->data["city"]							= $this->price->price_view_text(1,$config["city"]);
			$this->data["eco"]						= $this->price->price_view_text(1,$config["eco"]);
			$this->data["family"]						= $this->price->price_view_text(1,$config["family"]);
			$this->data["suv"]							= $this->price->price_view_text(1,$config["suv"]);
			$this->data["baby_seat"]				= $config["baby_seat"];
			$this->data["gps"]						= $config["gps"];		
			
			// Set up Province Menu
			$province_open 							= 	$this->config->item("province_open");
			$this->data["province_menu"]		=	$this->pachara->province_menu($province_open,$this->rental_page);
			
			
				
            
    }
	 
	 
	public function index()
	{
		
		// Load Carbox Contents
		$this->data["car_box_contents"] = $this->load->view('car_box_contents',$this->data,TRUE);
		
		// Load Main 
		$this->load->view('landing_page',$this->data);
		
		
	}
	
		
	
	
	public function check_price($province, $start_date, $start_time, $end_date, $end_time){
	
	
	
	
		// Load Config File in to Array
        $config	=  $this->config->item($this->config->item("clean_url_prefix").$province);
        
		$this->data					= $this->process_time($start_date, $start_time, $end_date, $end_time);
		
		// Get Price Texts       
        $this->data["city"] 		= $this->price->price_view_text($this->data["days"],$config["city"]);
        $this->data["eco"] 		= $this->price->price_view_text($this->data["days"],$config["eco"]);
        $this->data["family"] 	= $this->price->price_view_text($this->data["days"],$config["family"]);
        $this->data["suv"] 		= $this->price->price_view_text($this->data["days"],$config["suv"]);
        


		// Return View
		$this->load->view('car_box_contents',$this->data);
		
		
		
		
	}
	
	public function process_time($start_date, $start_time, $end_date, $end_time){
	
		$this->data["overtime_warn"] = FALSE;
		
		// Process Date Diff
		$date1		=	date_create($start_date." ".$start_time);
		$date2		=	date_create($end_date." ".$end_time);
		
		$diff			=	date_diff($date1,$date2);
		
		
		
		// Store Variable in to DATA
		$this->data["start_date"]		=	$start_date;
		$this->data["end_date"]		=	$end_date;
		$this->data["start_time"]		=	$start_time;
		$this->data["end_time"]		=	$end_time;
		
		// Store Diff Object and staffs
		$this->data["diff"]			= $diff;	
		$this->data["days"]		= $diff->days;
        $this->data["hours"]		= $diff->h;
        $this->data["min"]		= $diff->i;

		// Less than 1 days
        if(($this->data["days"] == 0) and (($this->data["hours"] >= 0) or ($this->data["min"] >= 0))){
	        
	        $this->data["days"] 		+= 1;
	        $this->data["hours"]		= 0;
	        $this->data["min"]		= 0;
	        
        }
              
        // Over Time Return
        if(($this->data["days"] >= 1) and ($this->data["hours"] >= 3) and ($this->data["min"] >= 0)){
	        
	        $this->data["days"] 		+= 1;
	        $this->data["hours"]		= 0;
	        $this->data["min"]		= 0;
	        
	        // Set if Overtime
	        $this->data["overtime_warn"] = TRUE;
	        
        }
        
        // Load Thai Date Format Class
        $this->load->library('thaidateformat');
        $this->data["start_date"] = $this->thaidateformat->date_format(new DateTime($start_date." ".$start_time),"\วันlที่  j F Y \เวลา H:i\น.");
        $this->data["end_date"] = $this->thaidateformat->date_format(new DateTime($end_date." ".$end_time),"\วันlที่  j F Y \เวลา H:i\น.");
        
        return $this->data;
		
	}
	

	public function get_prefix($start_date, $start_time, $end_date, $end_time){

		
		
		
		$this->load->view('mini/prefix_text',$this->process_time($start_date, $start_time, $end_date, $end_time));
		
	}
	
	
} 
	
	
	


	


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */