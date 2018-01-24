<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{

    function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    
    }

    public function signup()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $data                     = $this->input->post(NULL, TRUE);

        $this->form_validation->set_rules('fname','First Name','required|max_length[20]',
         array('required' =>'Please enter your First Name.',
               'max_length[20]' =>'First Name cannot exceed more than 20 characters.'));
        $this->form_validation->set_rules('lname','Last Name','required|max_length[20]', 
        array('required' =>'Please enter your Last Name.',
              'max_length[20]' =>'Last Name cannot exceed more than 20 characters.'));
        $this->form_validation->set_rules('email','Email','required|valid_email', 
        array('valid_email' =>'Please enter a Valid Email.'));
        $this->form_validation->set_rules('username','Username','required|min_length[5]|max_length[20]|is_unique[users.username]', 
        array('valid_email' =>'Please enter a Valid Email.',
              'min_length[5]' =>'Username cannot be below 5 characters.',
              'max_length[20]' =>'Username cannot exceed more than 20 characters.'));
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('con-password','Password Confirmation','required|matches[password]');
        
       
        if( $this->form_validation->run()==FALSE)
        {
            echo validation_errors();
        }
        else 
        {
            $model_data['last_name']  = (isset($data['lname'])) ? $data['lname']: '';
            $model_data['first_name'] = (isset($data['fname'])) ? $data['fname']: '';
            $model_data['username']   = (isset($data['username'])) ? $data['username'] : '';
            $model_data['email']      = (isset($data['email'])) ? $data['email']: '';
            $model_data['password']   = (isset($data['password'])) ? $data['password'] : '';
        
            $this->User_model->new_user($model_data);
            echo 'success';
        }

     
    }
}
