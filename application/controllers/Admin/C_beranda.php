<?php
defined('BASEPATH') or exit('No direct script access allowed');
class C_beranda extends CI_Controller
{

	public function index()
	{

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('landing/v_beranda');
		$this->load->view('templates/footer');
	}
}
