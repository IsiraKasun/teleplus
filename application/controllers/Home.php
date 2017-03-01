<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
    public function index()
    {
      $this->kasun();    
    }
    
    public function kasun()
    {
      $this->load->view('home_view');          
    }
}

