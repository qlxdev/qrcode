
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Presensi extends CI_Model{
   
  function getData()
  {	
    return $this->db->get('presensi')->result_array(); 
  }

  function getPresensi($nip)
  { 
    $nipkaryawan = array('nip'=> $nip);
    $this->db->select('*');
    $this->db->from('presensi');
    $this->db->like($nipkaryawan);
    $result = $this->db->get();
    return $result->result_array();
  }

}