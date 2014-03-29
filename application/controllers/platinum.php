<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Platinum extends CI_Controller {

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
            
            $this->load->helper('url');
            $this->load->library('session');
            $this->load->library('pachara');
            


            	
            $this->params[1] = "รถเช่า";
            $this->params[2] = "นครศรีธรรมราช";
            
            // Load Config File for each Province
            $this->config->load('config_landing');
            
            // Load Config File in to Array
            $config	=  $this->config->item("นครศรีธรรมราช");
            
            
                      
            // General Infomations
            $this->data["lang"]						= $lang;
            $this->data["site"]							= $this->config->base_url()."/".$this->params[1]."/".$this->params[2];
            $this->data["site_url"]					= $this->config->base_url().$this->params[1]."/".$this->params[2];
            $this->data["target"] 					= $this->params[2];
            $this->data["google"]					= $config["google_analytic"];
            $this->data["google_verify"]			= $config["google-site-verification"];
            $this->data["phone_number"] 		= $config["phone_number"];
            $this->data["phone_number_for_call"] 		= $config["phone_number_for_call"];
            $this->data["email"] 						= $config["email"];
            $this->data["deposit"]					= $config["deposit"];
            $this->data["fb_graph_url"] 			= $config["fb_graph_url"];
            $this->data["fb_url"]						= $config["fb_url"];
            $this->data["operate_time"]			= $config["operate_time"];
			$this->data["city"]							= $config["city"];
			$this->data["eco"]						= $config["eco"];
			$this->data["family"]						= $config["family"];
			$this->data["suv"]							= $config["suv"];
			$this->data["baby_seat"]				= $config["baby_seat"];
			$this->data["gps"]						= $config["gps"];		
			
			// Set up Province Menu
			$province_open 							= 	$this->config->item("province_open");
			$this->data["province_menu"]		=	$this->pachara->province_menu($province_open);	
            
    }
	 
	 
	public function index()
	{
		
		// Receive Site Data
		$data = $this->data;
		$this->load->view('platinum/platinum',$data);
		
	}
	
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('/platinum/login/', 'refresh');
	}
	
	public function myaccount()
	{
		
		if($this->session->userdata('fullname') == null){
		
			redirect('/platinum/', 'refresh');
			
		}else{
		
			// Receive Site Data
			$data = $this->data;
			$this->load->view('platinum/myaccount',$data);
			
		}
		
		
		
		
	}
	
	public function send_otp($phone_number){
	
		
		
		// Load Model
		$this->load->model('otp_model');
		
		// Verify Member
		$data = array();
        $data['verify'] = $this->otp_model->verify_customer($phone_number);
        
        // If Member has been verify Generate and Save OTP
        if($data['verify']){
        	$data['otp'] = $this->gen_otp(4);
	        $this->otp_model->save_otp($phone_number,$data['otp']);
	        
	        $this->load->library('sms');
	        
	        $username = "0866902772";
	        $password = "000904";
	        $msisdn = $phone_number;
	        $message = $data['otp'];
	        $sender = "THAIBULKSMS";
	        $ScheduledDelivery = "";
	        $force = "standard";
	
	
	        //$this->sms->send_sms($username,$password,$msisdn,$message,$sender,$ScheduledDelivery,$force);
	        
	        
	        echo true;	        
	        
        }else{
	        // Report Feedback
	        $this->load->view('platinum/test_db', $data);
        }

        
		
		
		
	}
	
	
	public function check_password_and_login($phone_number,$otp_password = null){
	
		// Load Model
		$this->load->model('login_model');
		
		// Verify OTP Password
		if($otp_password == null){
			echo "<span class='red'>กรุณากรอก OTP Password ที่ได้รับ</span>";
		
			
		}
		
		if($this->login_model->check_OTP_password($phone_number,$otp_password)){
			
			if($this->login_model->login($phone_number,true)){
				echo "login";
				echo $this->session->userdata('fullname');
				return true;
		
			}else{
				echo "cannot login";
				return false;
			}
			
		}else{
			echo 0;
		}
			

	}
	
	private function gen_otp($digits=null){
		
		// Make Default = 4
		if($digits == null)
			$digits = 4;
			
		return str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
		
	}
	
	public function save_otp($phone_number){
	
		// Load Model
		$this->load->model('otp_model');
		$this->otp_model->save_otp($phone_number,$this->gen_otp(4));
		
		
		
	}
	
	
	

		


	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */