<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_controller extends CI_Controller {
	
    public function index()
    {
    	if (isset($_SESSION['current_user'])){
    			$data['current_user'] = $_SESSION['current_user'];
    			$this->load->view('home_view',$data);
    	}

    	else{
    		  $data['loginerror'] = "You have to log in before continuing";
          $this->load->view('login_view',$data);
    	}
      	     
    }
    
}
