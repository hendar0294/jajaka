<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class Login_model extends CI_Model {


    public function __construct() {
        
        parent::__construct();
        $this->load->database();
        
    }

    public function create_user($username, $password) {
        
        $id="";
        $data = array(
            'id' => $id,
            'username'   => $username,
            'password'   => $password,
        );
        // $this->hash_password(
        return $this->db->insert('admin', $data);
        
    }
    

    public function resolve_user_login($username, $password) {
        
        $this->db->select('password');
        $this->db->from('admin');
        $this->db->where('username', $username);
        $hash = $this->db->get()->row('password');
        
        return $this->verify_password_hash($password, $hash);
        
    }
    
    public function get_id_user($username) {
        
        $this->db->select('id');
        $this->db->from('admin');
        $this->db->where('username', $username);

        return $this->db->get()->row('id');
        
    }
    public function get_id_pass($password) {
        
        $this->db->select('id');
        $this->db->from('admin');
        $this->db->where('password', $password);

        return $this->db->get()->row('id');
        
    }


    public function get_user($user_id) {
        
        $this->db->from('admin');
        $this->db->where('id', $user_id);
        return $this->db->get()->row();
        
    }

    public function get_username($user_id) {
        
        $this->db->select('username');
        $this->db->from('admin');
        $this->db->where('id', $user_id);
        return $this->db->get()->row();
        
    }

    public function get_password($user_id) {

        $this->db->select('password');
        $this->db->from('admin');
        $this->db->where('id', $user_id);
        return $this->db->get()->row();
        
    }
    

    private function hash_password($password) {
        
        return password_hash($password, PASSWORD_BCRYPT);
        
    }
    

    private function verify_password_hash($password, $hash) {
        
        // return password_verify($password, $hash);
        return true;
        
    }
    
}
