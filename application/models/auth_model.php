<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Auth_model extends CI_Model
{
 
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
 
    public function validate_user($data) {
    	$this->db->select('user_id'); 
    	$this->db->where('username', $data['username']);
        $this->db->where('password', $data['password']);

        $query = $this->db->get('users')->row();
        return $query;

    }
 
    function __destruct() {
        $this->db->close();
    }
}