<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model 
{
    public function new_user($data = NULL) 
    {
        //var_dump($data);
        $this->db->insert('users', $data);
        //echo $this->db->last_query();
    }

}