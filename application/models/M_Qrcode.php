
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Qrcode extends CI_Model{
   
  function getData()
  {	
    return $this->db->get('qr_code')->result_array(); 
  }

  function getQR($nip)
  { 
    $nipkaryawan = array('nip' => $nip);
    $this->db->select('*');
    $this->db->from('qr_code');
    $this->db->like($nipkaryawan);
    $result = $this->db->get();
    return $result->row_array();
  }

}