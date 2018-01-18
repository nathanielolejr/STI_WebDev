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
        $data                     = $this->input->post(NULL, TRUE);

        $model_data['last_name']  = (isset($data['lname'])) ? $data['lname']: '';
        $model_data['first_name'] = (isset($data['fname'])) ? $data['fname']: '';
        $model_data['email']      = (isset($data['email'])) ? $data['email']: '';
        $model_data['password']   = ((isset($data['password'])) ? $data['password'] : '');
    
        $this->User_model->new_user($model_data);
    }
}