<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Users extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Users', 'users');
        if(!$this->session->userdata('username')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['users'] = $this->users->getdata();
        $this->load->view('components/header');
        $this->load->view('components/menu');
        $this->load->view('components/sidebar');
        $this->load->view('pages/users/user', $data);
        $this->load->view('components/footer');
    }

    public function tambah_user()
    {
        $this->load->view('components/header');
        $this->load->view('components/menu');
        $this->load->view('components/sidebar');
        $this->load->view('pages/users/tambah_user');
        $this->load->view('components/footer');
    }

    function save()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $role = $this->input->post('role');

        $data = array(
            'nama' => $nama,
            'email' => $email,
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'role' => $role
        );

        $this->db->insert('users', $data);
        redirect('users');
    }

    function editUser()
    {
        $uid = $this->input->post('uid');
        if(isset($uid) and !empty($uid)){
            $userid = $this->users->getUserID($uid);
            echo json_encode($userid);
        }
    }

    function update()
    {
        $id = $this->input->post('userid');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $role = $this->input->post('role');
        if ($password!=null) {
            $data = array(
                'nama' => $nama,
                'email' => $email,
                'username' => $username,
                'password' => password_hash($password, PASSWORD_DEFAULT),
            );
        }

        if ($password==null) {
            $data = array(
                'nama' => $nama,
                'email' => $email,
                'username' => $username,
            );
        }
        

        $where = array('user_id' => $id);

        $this->db->where($where);
        $this->db->update('users', $data);
        redirect('users');
    }

    function deleted($id)
    {
        $data = array('user_id'=> $id);
        $this->db->delete('users', $data);
        redirect('users');
    }
}
