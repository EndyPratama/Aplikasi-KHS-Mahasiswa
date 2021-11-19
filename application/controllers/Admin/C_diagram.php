<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_diagram extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_diagram');
		$this->my_login->check_login();
	}

	function index()
	{
		$data['hasil'] = $this->m_diagram->matkul();

		// echo "<pre>";
		// print_r($data['hasil']);
		// echo "</pre>";
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('landing/diagram/v_diagram', $data);
		$this->load->view('templates/footer');
	}

	function detail($label)
	{
		// echo $label;
		$nama_matkul = "";
		$j = 0;

		for ($i = 0; $i < strlen($label); $i++) :
			if ($label[$i] == '%' || $label[$i] == '2' || $label[$i] == '0') {
				$nama_matkul[$j] = " ";
				$j++;
			} else {
				$nama_matkul[$j] = $label[$i];
				$j++;
			}
		endfor;
		echo $nama_matkul;
		$matkul = (string) $nama_matkul;
		echo "is_string(";
		var_export($matkul);
		echo ") = ";
		echo var_dump(is_string($matkul));
		$data['hasil'] = $this->m_diagram->ambil_data("$nama_matkul");

		// echo "<pre>";
		// print_r($data['hasil']);
		// echo "</pre>";
		foreach ($data['hasil'] as $d) {
			// echo $d->nama_matkul . "==" . $matkul;
			if ($d->nama_matkul === $matkul) {
				echo "Aku disini";
			}
		}
		// $this->load->view('templates/header');
		// $this->load->view('templates/sidebar');
		// $this->load->view('landing/diagram/v_detail', $data);
		// $this->load->view('templates/footer');
	}
}
