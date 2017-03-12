<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Feedback_controller extends CI_Controller {
	
    public function index()
    {
    		 
    		 if (isset($_SESSION['current_user'])){
    				$data['current_user'] = $_SESSION['current_user'];
    				$this->load->model('feedback_model');  
                     $data['values']=$this->feedback_model->get_feedback_data();
			         $data['cus_names']=$this->feedback_model->get_customer_names();  
                     $data['promotion_names']= $this->feedback_model->get_promotion_names();
			      	 $this->load->view('feedback_view',$data); 
    			}

    			else
    			{
    			 $data['loginerror'] = "You must be logged in";
	      	     $this->load->view('login_view',$data);   
    			}

    		  
    }


    public function add_new_feedback()
    {		

    	if (isset($_SESSION['current_user'])){
    		$data['current_user'] = $_SESSION['current_user'];
    		$this->load->model('feedback_model');
   			$values = array(
			'status' => $this->input->post('status'),
			'pro_id' => $this->input->post('pro_id'),
            'cus_id' => $this->input->post('cus_id')
			);
   			  $this->feedback_model->add_new_feedback($values);
   			  redirect(base_url() . 'feedback'); 
    		}
    		else{
				$data['loginerror'] = "You must be logged in";
	      	    $this->load->view('login_view',$data); 
    		}
    	
	 
    }
    
    
}