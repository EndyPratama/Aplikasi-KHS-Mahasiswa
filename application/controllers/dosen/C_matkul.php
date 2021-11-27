<?php
defined('BASEPATH') or exit('No direct script access allowed');
class C_matkul extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->my_login->check_login();
        $this->load->model('Dosen/Matkul_M', 'Matkul');
    }

    public function index()
    {
        $user = $this->session->userdata('username');
        $id_mhs = $this->Matkul->getIdDosen($user);
        // echo $id_mhs;
        $data['matkul'] = $this->Matkul->tampil_kelas($id_mhs);
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // $data['dosen'] = $this->m_dosen->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates_dosen/sidebar');
        $this->load->view('Dosen/V_Matkul', $data);
        $this->load->view('templates/footer');
    }
    public function Data_Mahasiswa()
    {
    }
    public function Pesan()
    {
    }
}
