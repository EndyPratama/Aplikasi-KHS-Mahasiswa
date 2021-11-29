<?php

class C_schedule extends CI_Controller
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
		$this->load->view('landing/schedule/v_schedule', $data);
		$this->load->view('templates/footer');
	}

	public function pilih($id_akademik)
	{
		$data['data'] = $this->m_schedule->getDataByID($id_akademik)->row();
		$data['jadwal'] = $this->m_schedule->tampil_data($id_akademik);
		$data['dosen'] = $this->m_dosen->tampil_data()->result();
		$data['matkul'] = $this->m_matkul->tampil_data();
		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('landing/schedule/v_insert', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$thn_schedule 			= $this->input->post('thn_schedule');
		$semester 			= $this->input->post('semester');
		$status 			= $this->input->post('status');

		$data = array(
			'thn_schedule'			=> $thn_schedule,
			'semester'			=> $semester,
			'status'			=> $status
		);

		$this->m_schedule->tambah_data($data, 'thn_schedule');
		$this->session->set_flashdata('insert_schedule', 'Data Berhasil Ditambahkan !!');
		redirect('Admin/C_schedule');
	}

	public function update($id_schedule)
	{
		$data['data'] = $this->m_schedule->getDataByID($id_schedule)->row();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('landing/schedule/v_update', $data);
		$this->load->view('templates/footer');
	}


	public function update_aksi()
	{
		$id_schedule = $this->input->post('id_schedule');

		$data = array(
			'thn_schedule'			=> $this->input->post('thn_schedule'),
			'semester'			=> $this->input->post('semester'),
			'status'			=> $this->input->post('status')
		);
		$update = $this->m_schedule->updateFile($id_schedule, $data);

		if ($update) {
			$this->session->set_flashdata('update_schedule', 'Data Berhasil Diupdate !!');
			redirect(base_url('Admin/C_schedule'));
		} else {
			echo "Gagal";
		}
	}

	public function delete($id_schedule)
	{
		$where = array('id_schedule' => $id_schedule);
		$this->m_schedule->hapus_data($where, 'thn_schedule');
		$this->session->set_flashdata('hapus_schedule', 'Data Berhasil Dihapus !!');
		redirect('Admin/C_schedule');
	}
}
