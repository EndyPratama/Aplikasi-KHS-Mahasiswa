<?php
class C_beranda extends CI_Controller
{
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates_dosen/sidebar');
		$this->load->view('dosen/v_beranda');
		$this->load->view('templates/footer');
	}
}
