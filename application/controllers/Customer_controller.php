<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer_controller extends CI_Controller {
	
    public function index()
    {
    		 
    		 if (isset($_SESSION['current_user'])){
    					$data['current_user'] = $_SESSION['current_user'];
    					 $this->load->model('customer_model');  
			         //load the method of model  
			         $data['values']=$this->customer_model->get_customer_data();  
			      	 $this->load->view('customer_view',$data); 
    			}

    			else
    			{
    			 $data['loginerror'] = "You must be logged in";
	      	     $this->load->view('login_view',$data);   
    			}

    		  
    }


    public function add_new_customer()
    {		

    	$this->form_validation->set_rules('cus_name', 'Customer Name', 'trim|required|min_length[2]|max_length[100]');
    	$this->form_validation->set_rules('con_num', 'Contact Number', 'trim|required|min_length[10]|max_length[10]|integer');
        $this->form_validation->set_rules('cus_detail_URL', 'Customer Detail URL', 'trim|required|min_length[2]|max_length[100]|valid_url');
    	if($this->form_validation->run())  {
    			if (isset($_SESSION['current_user'])){
    				$data['current_user'] = $_SESSION['current_user'];
    				$this->load->model('customer_model');
   					$values = array(
						'cus_name' => $this->input->post('cus_name'),
						'con_num' => $this->input->post('con_num'),
                        'cus_detail_URL' => $this->input->post('cus_detail_URL')
						);
   					$this->customer_model->add_new_customer($values);
   					redirect(base_url() . 'customers'); 
    			}

    			else{
					$data['loginerror'] = "You must be logged in";
	      	        $this->load->view('login_view',$data); 
    			}
    	}

    	else{
    			$data['current_user'] = $_SESSION['current_user'];
    			$this->load->model('customer_model');  
			    $data['values']=$this->customer_model->get_customer_data();  
			    $this->load->view('customer_view',$data); 
    	}

    		 

    			

    	 
    }
    




    
}