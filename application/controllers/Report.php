<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Report extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $this->load->view('components/header');
        $this->load->view('components/menu');
        $this->load->view('components/sidebar');
        $this->load->view('pages/report/report');
        $this->load->view('components/footer');
    }
}
