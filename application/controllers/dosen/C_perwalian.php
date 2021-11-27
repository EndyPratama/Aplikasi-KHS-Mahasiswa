<?php
defined('BASEPATH') or exit('No direct script access allowed');
class C_perwalian extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Dosen/Mahasiswa_M', 'Mahasiswa'); // Auto load model M_Index pada fungsi construct
        // $this->load->model('dosen'); // Auto load model M_Index pada fungsi construct
        // $this->my_login->check_login();
    }
    public function index()
    {
        $user = $this->session->userdata('username');
        // echo $user;
        $idDosen = $this->Mahasiswa->getIdDosen($user);
        // echo $idDosen;
        $mahasiswa = $this->Mahasiswa->getDataMahasiswa($idDosen);
        // echo "<pre>";
        // print_r($mahasiswa);
        // echo "</pre>";
        $data = [
            'mahasiswa' => $mahasiswa
        ];
        $this->load->view('templates/header');
        $this->load->view('templates_dosen/sidebar');
        $this->load->view('dosen/v_perwalian', $data);
        $this->load->view('templates/footer');
    }
    public function detailMahasiswa($idMhs)
    {
        $mahasiswa = $this->Mahasiswa->getDetailMahasiswa($idMhs);
        $transkrip = $this->Mahasiswa->getTranskripMahasiswa($idMhs);
        $ipk = $this->Mahasiswa->getIpkMahasiswa($idMhs);
        $total_sks = $this->Mahasiswa->getTotalSKS($idMhs);
        // echo "<pre>";
        // print_r($transkrip);
        // echo "</pre>";
        $data = [
            'ipk'       => $ipk,
            'total_sks' => $total_sks,
            'transkrip' => $transkrip,
            'mahasiswa' => $mahasiswa
        ];
        $this->load->view('templates/header');
        $this->load->view('templates_dosen/sidebar');
        $this->load->view('dosen/v_detailMhs', $data);
        $this->load->view('templates/footer');
    }
    public function Pesan()
    {
    }
}
