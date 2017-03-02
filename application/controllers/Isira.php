<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Isira extends CI_Controller {
	
    public function index()
    {
      $this->load->view('home_view');          
    }

     public function kasun()
    {
    	$this->load->helper('url');
      $this->load->view('home_view');          
    }
}

