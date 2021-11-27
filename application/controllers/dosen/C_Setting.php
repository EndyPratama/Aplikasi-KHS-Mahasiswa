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
        $this->load->view('templates/header');
        $this->load->view('templates_dosen/sidebar');
        // $this->load->view('Dosen/Matkul/V_Matkul', $data);
        $this->load->view('templates/footer');
    }
    public function Data_Mahasiswa()
    {
    }
    public function Pesan()
    {
    }
}
