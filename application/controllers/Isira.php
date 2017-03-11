<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Isira extends CI_Controller {
	
    public function index()
    {	
    	$this->load->helper('url');
      $this->load->view('login_view');          
    }

    public function kasun()
    {

      $this->load->view('welcome_message');          
    }
}

