<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CI_Pachara{

	


public function province_menu($province_open, $by_url = null){

		
		
		$a =  $province_open;
        $menu = "<ul>";
        	for($i=0;$i<count($a);$i++){	
        			if($by_url != null){
        				if($a[$i] != $by_url)
           				$menu .= "<li><a href='".site_url().$a[$i]."'>$a[$i]</a></li>";
        			}else{
	        			$menu .= "<li><a href='".site_url().$a[$i]."'>$a[$i]</a></li>";
        			}
        			
				}
	    $menu .= "</ul>";   
	        return $menu;
		
	}


}


?>