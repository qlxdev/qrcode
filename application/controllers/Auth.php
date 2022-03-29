<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	
	public function index()
	{
		// var_dump(password_hash('rahasia', PASSWORD_DEFAULT));die;
		if ($this->session->userdata('username')) {
            redirect('dashboard');
        }
        // $data['favicon'] = $this->setting->favicon();
		$this->load->view('pages/auth/signin');
	}

	function login()
	{
		if ($this->session->userdata('username')) {
            redirect('dashboard');
        }
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$user = $this->db->get_where('users', ['username' => $username])->row_array();
		date_default_timezone_set('Asia/Bangkok');
		
		if ($user) {
			if($user['role']=='admin'){
				if (password_verify($password, $user['password'])) {
					$data = [
						'username' => $user['username'],
						'nama' => $user['nama'],
						'email' => $user['email'],
						'role' => $user['role']
					];
					$data = $this->session->set_userdata($data);
					redirect('dashboard');
				}
			}
		}else{
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role');
		redirect('auth');
	}


	

}
