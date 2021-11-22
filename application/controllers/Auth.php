<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('v_login');
    }

    public function registrasi()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('npm', 'npm', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('no_telp', 'No Hp', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {

            $this->load->view('v_registrasi');
        } else {
            $data = [
                'email'         => $this->input->post('email'),
                'username'      => $this->input->post('username'),
                'password'      => md5($this->input->post('password1')),
                'level'         => 'Mahasiswa',
                'status'        => 'Aktif'
            ];

            $item = [
                'nama'         => $this->input->post('nama'),
                'npm'         => $this->input->post('npm'),
                'no_telp'         => $this->input->post('no_telp'),
                'foto'          => 'gambar.png'
            ];

            $this->db->insert('user', $data);
            $item['id_user'] = $this->db->insert_id();
            $this->db->insert('mahasiswa', $item);
            redirect('Auth');
        }
    }

    public function insert()
    {
        if ($this->input->post()) {
            //insert data ke database
            //memanggil model
            $data = $this->input->post();
            //memanggil model
            $this->m_user->insert_data($data);
            redirect('Auth');
        } else {
            $this->load->view('v_registrasi');
        }
    }

    public function login()
    {
        $this->my_login->do_login();
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('Auth');
    }

    public function lupa_password()
    {
        $this->load->view('v_lupa_password');
    }
}
