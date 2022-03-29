
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Karyawan extends CI_Model{
   
  function getKaryawans()
  {	
    return $this->db->get('karyawan')->result_array(); 
  }

  function getKaryawan($nip)
  { 
    $nipkaryawan = array('nip'=> $nip);
    $this->db->select('*');
    $this->db->from('karyawan');
    $this->db->like($nipkaryawan);
    $result = $this->db->get();
    return $result->row_array();
  }

}