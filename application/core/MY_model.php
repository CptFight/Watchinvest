<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model {
    
    public $_limit = 0;

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get($id) {
      $this->db->where('id',$id);
      return $this->db->get($this->_db)->row();
    }

    public function getAll() {
        $this->db->order_by('id','desc');
        return $this->db->get($this->_db)->result();
    }

    public function count(){
        return count($this->db->get($this->_db)->result());
    }

    public function update($object){
        $this->db->where('id', $object['id']);
        unset($object['id']);
        return $this->db->update($this->_db, $object); 
    }

    public function insert($data){
        if(isset($data['id'])){
            unset($data['id']);
        }
        if($this->db->insert($this->_db, $data)){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

    public function delete($id){
        try{
            $this->db->where('id', $id);
            return $this->db->delete($this->_db); 
        }catch(exception $e){
            return false;
        }       
    }

    public function getCurrentUser(){
        $user = $this->session->get_userdata('user');
      
        if(!$user || !isset($user['user']) || !isset($user['user']->id)){
            redirect('/users/login');
        }else{
            $user = $user['user'];
        }
        return $user;
    }

  
}