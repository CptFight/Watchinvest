<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users_m extends MY_Model {

    public $_db = 'users';
    public $_name = 'users_m';
  
    public function login($login, $password){ 
        $this->db->where('email',$login);
        $this->db->where('password',md5($password));
        $user = $this->db->get($this->_db)->row();
        if($user){ return $user; }
        else return false;
    }

    public function emailExist($email){
        $this->db->where('login',$email);
        return $this->db->get($this->_db)->row();
    }
   
}