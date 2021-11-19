<?php
class C_beranda extends CI_Controller
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
		$this->load->view('dosen/v_beranda');
		$this->load->view('templates/footer');
	}
}
