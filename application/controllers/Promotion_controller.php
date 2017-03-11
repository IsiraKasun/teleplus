<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Promotion_controller extends CI_Controller {
	
    public function index()
    {
    		 $this->load->model('promotion_model');  
         //load the method of model  
         $data['values']=$this->promotion_model->get_promotion_data();  
      	 $this->load->view('promotion_view',$data);     
    }


    
}