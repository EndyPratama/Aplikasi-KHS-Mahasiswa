<?php
defined('BASEPATH') or exit('No direct script access allowed');
class C_input_nilai extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->my_login->check_login();
    }
    
    public function index()
    {
    }
    public function Data_Mahasiswa()
    {
    }
    public function Pesan()
    {
    }
}
