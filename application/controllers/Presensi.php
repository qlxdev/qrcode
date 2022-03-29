<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Presensi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Karyawan', 'karyawan');
        $this->load->model('M_Presensi', 'presensi');
        $this->load->model('M_Qrcode', 'qr');
        if(!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['karyawan'] = $this->karyawan->getKaryawans();
        $data['presensi'] = [];
        $data['qrcode'] = [];
        for ($a=0; $a <count($data['karyawan']) ; $a++) { 
            $presensi = $this->presensi->getPresensi($data['karyawan'][$a]['nip']);
            $QRCode = $this->qr->getQR($data['karyawan'][$a]['nip']);
            array_push($data['presensi'], $presensi);
            array_push($data['qrcode'], $QRCode);
        }
        $this->load->view('components/header');
        $this->load->view('components/menu');
        $this->load->view('components/sidebar');
        $this->load->view('pages/presensi/presensi', $data);
        $this->load->view('components/footer');
    }
}
