<?php

class C_akademik extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}
	
	public function index()
	{
		$data['akademik'] = $this->m_akademik->tampil_data();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('landing/akademik/v_akademik', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$thn_akademik 			= $this->input->post('thn_akademik');
		$semester 			= $this->input->post('semester');
		$status 			= $this->input->post('status');

		$data = array(
			'thn_akademik'			=> $thn_akademik,
			'semester'			=> $semester,
			'status'			=> $status
		);

		$this->m_akademik->tambah_data($data, 'thn_akademik');
		$this->session->set_flashdata('insert_akademik', 'Data Berhasil Ditambahkan !!');
		redirect('Admin/C_akademik');
	}

	public function update($id_akademik)
	{
		$data['data'] = $this->m_akademik->getDataByID($id_akademik)->row();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('landing/akademik/v_update', $data);
		$this->load->view('templates/footer');
	}


	public function update_aksi()
	{
		$id_akademik = $this->input->post('id_akademik');

		$data = array(
			'thn_akademik'			=> $this->input->post('thn_akademik'),
			'semester'			=> $this->input->post('semester'),
			'status'			=> $this->input->post('status')
		);
		$update = $this->m_akademik->updateFile($id_akademik, $data);

		if ($update) {
			$this->session->set_flashdata('update_akademik', 'Data Berhasil Diupdate !!');
			redirect(base_url('Admin/C_akademik'));
		} else {
			echo "Gagal";
		}
	}

	public function delete($id_akademik)
	{
		$where = array('id_akademik' => $id_akademik);
		$this->m_akademik->hapus_data($where, 'thn_akademik');
		$this->session->set_flashdata('hapus_akademik', 'Data Berhasil Dihapus !!');
		redirect('Admin/C_akademik');
	}
}
