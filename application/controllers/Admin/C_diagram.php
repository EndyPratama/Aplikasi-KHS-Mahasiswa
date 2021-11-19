<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_diagram extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_diagram');
        $this->my_login->check_login();
    }

	function index()
	{
	  $data['hasil']=$this->m_diagram->matkul();

	  //echo "<pre>";
		//print_r($data['hasil']);
		//echo "</pre>";
	    $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('landing/diagram/v_diagram', $data);
		$this->load->view('templates/footer');
	}

	function detail()
	{
		$nama_matkul = $this->input->post('nama_matkul');
		$data['hasil']=$this->m_diagram->ambil_data($nama_matkul);

		//echo "<pre>";
		//print_r($data['hasil']);
		//echo "</pre>";

		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('landing/diagram/v_detail', $data);
        $this->load->view('templates/footer');
	}
}
?>