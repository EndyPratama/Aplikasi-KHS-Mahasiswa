<?php
defined('BASEPATH') or exit('No direct script access allowed');
class C_Setting extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->my_login->check_login();
        $this->load->model('Dosen/Setting_M', 'Setting');
    }

    public function index()
    {
        $user = $this->session->userdata('username');
        echo $user;
        $data['dosen'] = $this->Setting->tampil_data($user);
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dosen/V_Setting', $data);
        $this->load->view('templates/footer');
    }
    public function update($id_dosen)
    {
        $data['data'] = $this->Setting->getDosen($id_dosen);
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dosen/V_Update', $data);
        $this->load->view('templates/footer');
    }
}
