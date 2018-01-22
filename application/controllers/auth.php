<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
 {
    function __construct() {
        parent::__construct();
        $this->load->model("Auth_model");
        //if(!empty($_SESSION['user_id']))
          //  redirect('home');
    }
 
    public function login() {

        $status = 'fail';
        if($_POST) {

            //var_dump($_POST);

            $result = $this->Auth_model->validate_user($_POST);
            if(isset($result))
            {
            	if($result->user_id > 0) 
            	{
                    //redirect("welcome");
                    $this->session->set_userdata('user_id', $result->user_id);

                    $status = 'success';
            	} 
            }
            else
            {   
                $status = 'fail';
            } 
        }
        
        print json_encode($status);
        //$this->load->view("login");
    }
    public function logout()
    {
        $this->session->unset_userdata('user_id');

    }
}
