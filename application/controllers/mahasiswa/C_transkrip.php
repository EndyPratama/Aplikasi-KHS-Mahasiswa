<?php 

class C_transkrip extends CI_Controller{

	public function index()
	{
		$data['mahasiswa'] = $this->m_mahasiswa->tampil();
		$data['matkul'] = $this->m_matkul->tampil_mhs();
		$data['nilai'] = $this->m_nilai->tampil_nilai();

		$this->load->view('templates/header');
        $this->load->view('templates_mahasiswa/sidebar');
        $this->load->view('mahasiswa/transkrip/v_transkrip', $data);
        $this->load->view('templates/footer');
	}
}