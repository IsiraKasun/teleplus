<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Promotion_controller extends CI_Controller {
	
    public function index()
    {
      $this->load->view('promotion_view');     
    }
    
}