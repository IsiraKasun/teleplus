<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Promotion_controller extends CI_Controller {
	
    public function index()
    {
    		 
    		 if (isset($_SESSION['current_user'])){
    			$data['current_user'] = $_SESSION['current_user'];
    			$this->load->view('home_view',$data);
    			}

    			else
    			{
    			  $this->load->model('promotion_model');  
	         //load the method of model  
	         $data['values']=$this->promotion_model->get_promotion_data();  
	      	 $this->load->view('promotion_view',$data);    
    			}

    		  
    }


    public function add_new_promotion()
    {		

    		 if (isset($_SESSION['current_user'])){
    			$data['current_user'] = $_SESSION['current_user'];
    			$this->load->view('home_view',$data);
    			}

    			else{
    				$data = array(
						'type' => $this->input->post('type'),
						'description' => $this->input->post('description'),
						'starting_date' => $this->input->post('starting_date'),
						'ending_date' => $this->input->mdate(post('ending_date'))
						);
    			}

    	 
    }
    




    
}