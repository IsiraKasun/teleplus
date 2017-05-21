<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_controller extends CI_Controller {
	
    public function index()
    {
    		 
    		 if (isset($_SESSION['current_user']) && $_SESSION['admin'] == true){
    				$data['current_user'] = $_SESSION['current_user'];
    				$this->load->model('admin_model');
                    $this->load->model('feedback_model');
                    $data['promotion_names']= $this->feedback_model->get_promotion_names(); 
			      	$this->load->view('admin_view',$data); 
    			}

    			else
    			{
    			 $data['loginerror'] = "You must be logged in";
	      	     $this->load->view('login_view',$data);   
    			}

    		  
    }


    public function getselectedpromotion()
    {
        if (isset($_SESSION['current_user'])){
            $data['current_user'] = $_SESSION['current_user'];
            $this->load->model('admin_model');
            $this->load->model('feedback_model');
            $data['promotion_names']= $this->feedback_model->get_promotion_names(); 
            $promotion = $this->input->post('pro_id');

            $success = $this->admin_model->get_success_percentage($promotion);
            $failure = $this->admin_model->get_failure_percentage($promotion);
            $data['success'] = $success;
            $data['failure'] = $failure;
            $this->load->view('admin_view',$data); 
            }
            else{
                $data['loginerror'] = "You must be logged in";
                $this->load->view('login_view',$data); 
            }
    }
    
    
}