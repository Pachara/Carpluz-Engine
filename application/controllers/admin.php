<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

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
            
            
            
            // General Information            
            $this->data["lang"] = $lang;
            
            
            
            
            
    }
	 
	 
	public function index()
	{
		
		// Receive Site Data
		$data = $this->data;
		$this->load->view('admin/index',$data);
		
		
	}
	
	public function verify_customer_get_user_info($phone_number = null){
	
		
		
		// Load Customer Library
		$this->load->library('customer');
		
		
		if($this->customer->verify_customer($phone_number)){
			
			
			$this->data["verify"] = TRUE;
			$result = array_merge($this->data, $this->customer->get_user_info($phone_number));
			echo json_encode($result);
			
			
		}else{
			$this->data["verify"] = FALSE;
			echo json_encode($this->data);
		}
		
		
			
	
	}
	
	
	public function verify_booking(){
	
		// Get Post Data
		$data = $this->input->post();
		
		$this->load->library('price');
		
		$data["days"] 	= $this->price->get_day($this->input->post("start_date"),$this->input->post("start_time"),$this->input->post("end_date"),$this->input->post("end_time"));
		$data["late_return"] 		= $this->price->check_late_return($this->input->post("start_date"),$this->input->post("start_time"),$this->input->post("end_date"),$this->input->post("end_time"));
		
		
		$data["price"] = $this->price->get_price($data);
		
		$data["get_place"] 		= $this->input->post("get_place");
		$data["return_place"] 	= $this->input->post("return_place");
		
		if($data["get_place"] == "ในเมือง")
			$data["get_place"] 		= $this->input->post("return_placex");
		if($data["return_place"] == "ในเมือง")
			$data["return_place"] 		= $this->input->post("return_placex");
		
		
		
		$this->get_verify_booking_view($data);
		
		
		
		
		
		
		
		
	}
	
	public function get_verify_booking_view($data){
	
		
		return $this->load->view('admin/verify_booking',$data);
		
	}
	
	

	
	public function logout(){
		$this->session->sess_destroy();
		redirect('/platinum/login/', 'refresh');
	}
	
		
	
	
	

		


	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */