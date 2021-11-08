<?php 

class C_transkrip extends CI_Controller{

	public function index()
	{
		$data['mahasiswa'] = $this->m_mahasiswa->tampil_data();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('landing/transkrip/v_transkrip',$data);
		$this->load->view('templates/footer');
	}

	public function detail($npm)
	{
		$nama = $this->m_mahasiswa->ambil($npm);
		$matkul = $this->m_mahasiswa->ambil_matkul($npm);

		$data = [
		  'nama'  	=> $nama,
		  'npm'  	=> $npm,
		  'matkul' 	=> $matkul
		];

		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('landing/transkrip/v_detail', $data);
        $this->load->view('templates/footer');
	}
}