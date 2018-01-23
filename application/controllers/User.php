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

        $this->form_validation->set_rules('email','Email','required|valid_email', array('valid_email' =>
        'Please input a proper email.'));
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
