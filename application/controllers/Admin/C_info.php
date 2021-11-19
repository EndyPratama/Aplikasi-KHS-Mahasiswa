<?php 

class C_info extends CI_Controller{

	public function index()
	{
		$data['admin'] = $this->m_admin->tampil_akun();
		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('landing/info/v_info',$data);
		$this->load->view('templates/footer');
	}
}