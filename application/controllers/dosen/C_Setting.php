<?php
defined('BASEPATH') or exit('No direct script access allowed');
class C_Setting extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->my_login->check_login();
    }

    public function index()
    {
        $data['user'] = $this->m_user->tampil('user');
        $this->load->view('templates/header');
        $this->load->view('templates_dosen/sidebar');
        $this->load->view('Dosen/Akun/V_akun', $data);
        $this->load->view('templates/footer');
    }
    public function update($id_user)
    {
        $data['data'] = $this->m_user->getDataByID($id_user)->row();

        $this->load->view('templates/header');
        $this->load->view('templates_dosen/sidebar');
        $this->load->view('Dosen/Akun/v_update', $data);
        $this->load->view('templates/footer');
    }

    public function update_aksi()
    {
        $id_user = $this->input->post('id_user');

        $username               = $this->input->post('username');
        $password           =md5($this->input->post('password'));
        $email              = $this->input->post('email');

        $data = array(
            'username'              => $username,
            'password'              => $password,
            'email'             => $email
        );
        $update = $this->m_user->updateFile($id_user, $data);

        if ($update) {
            $this->session->set_flashdata('update_user', 'Data Berhasil Diupdate !!');
            redirect(base_url('dosen/C_Setting'));
        } else {
            echo "Gagal";
        }
    }
}
