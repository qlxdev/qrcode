
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Users extends CI_Model{
   
  function getData()
  {	
    return $this->db->get('users')->result_array(); 
  }

  function getUser($email)
  { 
    $email_user = array('email'=> $email);
    $this->db->select('*');
    $this->db->from('users');
    $this->db->like($email_user);
    $result = $this->db->get();
    return $result->row_array();
  }

  function getUserID($id)
  { 
    $id_user = array('user_id'=> $id);
    $this->db->select('*');
    $this->db->from('users');
    $this->db->like($id_user);
    $result = $this->db->get();
    return $result->row_array();
  }

}