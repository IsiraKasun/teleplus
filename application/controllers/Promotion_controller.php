<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Promotion_controller extends CI_Controller {
	
    public function index()
    {
    		 
    		 if (isset($_SESSION['current_user'])){
    					$data['current_user'] = $_SESSION['current_user'];
    					 $this->load->model('promotion_model');  
			         //load the method of model  
			         $data['values']=$this->promotion_model->get_promotion_data();  
			      	 $this->load->view('promotion_view',$data); 
    			}

    			else
    			{
    			 $data['loginerror'] = "Username or password incorrect";
	      	 $this->load->view('login_view',$data);   
    			}

    		  
    }


    public function add_new_promotion()
    {		

    		 if (isset($_SESSION['current_user'])){
    				$data['current_user'] = $_SESSION['current_user'];
    				$sdate = $this->input->post('starting_date');
    				$edate = $this->input->post('ending_date');
    				$this->load->model('promotion_model');
    				$csf_id = $this->promotion_model->get_system_userid($_SESSION['current_user']);
   					$values = array(
						'type' => $this->input->post('type'),
						'description' => $this->input->post('description'),
						'starting_date' => mdate($sdate),
						'ending_date' => mdate($edate),
						'csf_id' => $csf_id
						);
   					$this->load->model('promotion_model');
   					$this->promotion_model->add_new_promotion($values);
   					redirect(base_url() . 'promotion'); 
    			}

    			else{
					$data['loginerror'] = "Username or password incorrect";
	      	 $this->load->view('login_view',$data); 
    			}

    	 
    }
    




    
}