<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_lingkaran extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_diagram');
	}

	function index()
	{
		$data['hasil'] = $this->m_diagram->matkul();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('landing/diagram/v_lingkaran', $data);
		$this->load->view('templates/footer');
	}

	function detail($matkul)
	{
		$j = 0;
		$nama_matkul = '';
		for ($i = 0; $i < strlen($matkul); $i++) :
			if ($matkul[$i] == '%') {
			} else if ($matkul[$i] == '2') {
			} else if ($matkul[$i] == '0') {
				$nama_matkul[$j] = " ";
				$j++;
			} else {
				$nama_matkul[$j] = $matkul[$i];
				$j++;
			}
		endfor;
		echo $nama_matkul;
		$data['hasil'] = $this->m_diagram->ambil_data($nama_matkul);
		$data['nama_matkul'] = $nama_matkul;
		// echo "<pre>";
		// print_r($data['hasil']);
		// echo "</pre>";

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('landing/diagram/v_detail2', $data);
		$this->load->view('templates/footer');
	}
}
