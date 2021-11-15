<?php

class C_transkrip extends CI_Controller
{

	public function index()
	{
		$user = $this->session->userdata('username');
		$id_mhs = $this->m_matkul->getIdMhs($user);
		$data['matkul'] = $this->m_matkul->tampil_mhs($id_mhs);

		$data['mahasiswa'] = $this->m_mahasiswa->tampil();
		$data['nilai'] = $this->m_nilai->tampil_nilai($id_mhs);

		$this->load->view('templates/header');
		$this->load->view('templates_mahasiswa/sidebar');
		$this->load->view('mahasiswa/transkrip/v_transkrip', $data);
		$this->load->view('templates/footer');
	}
}
