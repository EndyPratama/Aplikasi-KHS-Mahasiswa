<?php

class C_transkrip extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}

	public function index()
	{
		$data['mahasiswa'] = $this->m_mahasiswa->tampil_data();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('landing/transkrip/v_transkrip', $data);
		$this->load->view('templates/footer');
	}

	public function detail($npm)
	{
		$nama = $this->m_mahasiswa->ambil($npm);
		$matkul = $this->m_mahasiswa->ambil_transkrip($npm);

		$data = [
			'nama'  	=> $nama,
			'npm'  		=> $npm,
			'matkul' 	=> $matkul
		];
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('landing/transkrip/v_detail', $data);
		$this->load->view('templates/footer');
	}
}
