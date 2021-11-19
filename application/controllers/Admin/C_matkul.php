<?php

class C_matkul extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}
	
	public function index()
	{
		$data['matkul'] = $this->m_matkul->tampil_data();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('landing/matkul/v_matkul', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$nama_matkul 			= $this->input->post('nama_matkul');
		$sks 			= $this->input->post('sks');
		$semester 			= $this->input->post('semester');

		$data = array(
			'nama_matkul'			=> $nama_matkul,
			'sks'			=> $sks,
			'semester'			=> $semester
		);

		$this->m_matkul->tambah_data($data, 'matkul');
		$this->session->set_flashdata('insert_matkul', 'Data Berhasil Ditambahkan !!');
		redirect('C_matkul');
	}

	public function update($id_matkul)
	{
		$data['data'] = $this->m_matkul->getDataByID($id_matkul)->row();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('landing/matkul/v_update', $data);
		$this->load->view('templates/footer');
	}


	public function update_aksi()
	{
		$id_matkul = $this->input->post('id_matkul');

		$data = array(
			'nama_matkul'			=> $this->input->post('nama_matkul'),
			'sks'			=> $this->input->post('sks'),
			'semester'			=> $this->input->post('semester')
		);
		$update = $this->m_matkul->updateFile($id_matkul, $data);

		if ($update) {
			$this->session->set_flashdata('update_matkul', 'Data Berhasil Diupdate !!');
			redirect(base_url('C_matkul'));
		} else {
			echo "Gagal";
		}
	}

	public function delete($id_matkul)
	{
		$where = array('id_matkul' => $id_matkul);
		$this->m_matkul->hapus_data($where, 'matkul');
		$this->session->set_flashdata('hapus_matkul', 'Data Berhasil Dihapus !!');
		redirect('C_matkul');
	}
}
