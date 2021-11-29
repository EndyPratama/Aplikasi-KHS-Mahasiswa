<?php
defined('BASEPATH') or exit('No direct script access allowed');
class C_Schedule extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->my_login->check_login();
        // $this->load->model('Dosen/Schedule_M', 'Schedule');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates_dosen/sidebar');
        $this->load->view('dosen/V_Schedule');
        $this->load->view('templates/footer');
    }
}
