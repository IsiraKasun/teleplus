<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_controller extends CI_Controller {
    
    public $data = array('loginerror' => "");

    public function index()
    {

      $this->load->view('index');   
    }

    public function validate_credentials()
    { 
      
    	$this->form_validation->set_rules('name', 'Username', 'required');  
      $this->form_validation->set_rules('password', 'Password', 'required');
      if($this->form_validation->run())  
           {   
                $name = $this->input->post('name');  
                $password = $this->input->post('password');  
                $this->load->model('login_model');  
                if($this->login_model->credintials_from_db($name, $password))  
                {  
                     
                     if($this->login_model->check_if_admin($name))
                     {
                        $_SESSION['admin'] = true;
                     }
                     else{
                        $_SESSION['admin'] = false;
                     }

                     $_SESSION['current_user'] = $name;
                     redirect(base_url() . 'home');  
                }  
                else  
                {    
                     $data['loginerror'] = "Username or password incorrect";
                     $this->load->view('login_view',$data);  
                }  
           }  
           else  
           {  
                //false  
                $data['loginerror'] = "Username or password incorrect";
                $this->load->view('login_view', $data);   
           }  
    }

    public function logout()
    {
      unset($_SESSION['current_user']);
      unset($_SESSION['admin']);
      redirect(base_url());
    }
    
}