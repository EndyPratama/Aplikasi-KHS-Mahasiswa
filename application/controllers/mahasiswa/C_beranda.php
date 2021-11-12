<?php 

class C_beranda extends CI_Controller{

	public function index()
	{

		$this->load->view('templates/header');
		$this->load->view('templates_mahasiswa/sidebar');
		$this->load->view('mahasiswa/v_beranda');
		$this->load->view('templates/footer');
	}


}