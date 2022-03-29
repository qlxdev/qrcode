<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Karyawan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Karyawan', 'karyawan');
        $this->load->model('M_Qrcode', 'qrcode');
        $this->load->model('M_Users', 'user');
        if(!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function index()
    {
        
        $data['karyawan'] = $this->karyawan->getKaryawans();
        $data['qrcode'] = [];
        for ($z=0; $z <count($data['karyawan']) ; $z++) { 
            $qrcode = $this->qrcode->getQR($data['karyawan'][$z]['nip']);
            array_push($data['qrcode'], $qrcode);
        }
        $this->load->view('components/header');
        $this->load->view('components/menu');
        $this->load->view('components/sidebar');
        $this->load->view('pages/karyawan/karyawan', $data);
        $this->load->view('components/footer');
    }

    function save()
    {
        $nip = $this->input->post('nip');
        $nama = $this->input->post('nama');
        $place = $this->input->post('place');
        $date = $this->input->post('date');
        $ttl = $place.', '. $date;
        $address = $this->input->post('address');
        $email = $this->input->post('email');
        $agama = $this->input->post('agama');
        $phone = $this->input->post('phone');
        $char = '0123456789abcdefghijklmnopqrstuvwxyz';
        $unique = strtoupper(substr(str_shuffle($char), 0, 5));

        $data = array(
            'nip' => $nip,
            'nama' => $nama,
            'ttl' => $ttl,
            'address' => $address,
            'email' => $email,
            'phone' => $phone,
            'agama' => $agama
        );

        $this->load->library('ciqrcode'); //pemanggilan library QR CODE
 
        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']     = './assets/'; //string, the default is application/cache/
        $config['errorlog']     = './assets/'; //string, the default is application/logs/
        $config['imagedir']     = './assets/images/qrcode/'; //direktori penyimpanan qr code
        $config['quality']      = true; //boolean, the default is true
        $config['size']         = '1024'; //interger, the default is 1024
        $config['black']        = array(224,255,255); // array, default is array(255,255,255)
        $config['white']        = array(70,130,180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
 
        $image_name=$unique.'.png'; //buat name dari qr code sesuai dengan nim
 
        $params['data'] = $unique; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

        $dataQR = array(
            'nip' => $nip,
            'qrcode' => $unique
        );

        $this->db->insert('karyawan', $data);
        $this->db->insert('qr_code', $dataQR);
        redirect('karyawan');
    }

    function getKaryawan()
    {
        $id_karyawan = $this->input->post('id_karyawan');
        if(isset($id_karyawan) and !empty($id_karyawan)){
            $idkaryawan = $this->karyawan->getKaryawan($id_karyawan);
            echo json_encode($idkaryawan);
        }
    }

    function getQRCode()
    {
        $nip = $this->input->post('nip');
        if(isset($nip) and !empty($nip)){
            $idkaryawan = $this->qrcode->getQR($nip);
            echo json_encode($idkaryawan);
        }
    }

    function getAccount()
    {
        $email = $this->input->post('emailkaryawan');
        if(isset($email) and !empty($email)){
            $data = $this->user->getUser($email);
            echo json_encode($data);
        }
    }

    function editKaryawan()
    {
        $id_karyawan = $this->input->post('id_karyawan');
        if(isset($id_karyawan) and !empty($id_karyawan)){
            $idkaryawan = $this->karyawan->getKaryawan($id_karyawan);
            echo json_encode($idkaryawan);
        }
    }

    function update()
    {
        $nip = $this->input->post('nip');
        $nama = $this->input->post('nama');
        $place = $this->input->post('place');
        $date = $this->input->post('date');
        $ttl = $place.', '. $date;
        $address = $this->input->post('address');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $agama = $this->input->post('agama');
        
        $data = array(
            'nama' => $nama,
            'ttl' => $ttl,
            'address' => $address,
            'email' => $email,
            'phone' => $phone,
            'agama' => $agama
        );

        $where = array('nip' => $nip);

        $this->db->where($where);
        $this->db->update('karyawan', $data);
        redirect('karyawan');
    }

    function deleted($id)
    {
        $data = array('nip'=> $id);
        $this->db->delete('karyawan', $data);
        $this->db->delete('presensi', $data);
        $this->db->delete('qr_code', $data);
        redirect('karyawan');
    }
}
