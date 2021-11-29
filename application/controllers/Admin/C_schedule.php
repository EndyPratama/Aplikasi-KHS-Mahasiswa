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
		$id_matkul 		= $this->input->post('id_matkul');
		$dosen 			= $this->input->post('dosen');
		$kelas 			= $this->input->post('kelas');
		$jmlh_mhs 			= $this->input->post('jmlh_mhs');
		$hari 			= $this->input->post('hari');
		$mulai 			= $this->input->post('mulai');
		$selesai 			= $this->input->post('selesai');
		$tahun 			= $this->input->post('id_akademik');

		$data = array(
			'id_matkul'			=> $id_matkul,
			'dosen'			=> $dosen,
			'kelas'			=> $kelas,
			'jmlh_mhs'			=> $jmlh_mhs,
			'hari'			=> $hari,
			'mulai'			=> $mulai,
			'selesai'			=> $selesai,
			'tahun'			=> $tahun
		);

		$this->m_schedule->tambah_data($data, 'kelas');
		$this->session->set_flashdata('insert_jadwal', 'Data Berhasil Ditambahkan !!');
		redirect('Admin/C_schedule/pilih/'.$tahun);
	}

	public function update($id)
	{
		$data['data'] = $this->m_schedule->getID($id)->row();
		$data['dosen'] = $this->m_dosen->tampil_data()->result();
		$data['matkul'] = $this->m_matkul->tampil_data();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('landing/schedule/v_update', $data);
		$this->load->view('templates/footer');
	}


	public function update_aksi()
	{
		$id = $this->input->post('id');
		$tahun 			= $this->input->post('id_akademik');
		$data = array(
			'id_matkul'		=> $this->input->post('id_matkul'),
			'dosen'			=> $this->input->post('dosen'),
			'kelas'			=> $this->input->post('kelas'),
			'hari'			=> $this->input->post('hari'),
			'mulai'			=> $this->input->post('mulai'),
			'selesai'		=> $this->input->post('selesai'),
			'tahun'			=> $this->input->post('id_akademik'),
		);
		$update = $this->m_schedule->updateFile($id, $data);

		if ($update) {
			$this->session->set_flashdata('update_jadwal', 'Data Berhasil Diupdate !!');
			redirect(base_url('Admin/C_schedule/pilih/'.$tahun));
		} else {
			echo "Gagal";
		}
	}

	public function delete($id)
	{
		$id_akademik 			= $this->input->post('id_akademik');

		$where = array('id' => $id);
		$this->m_schedule->hapus_data($where, 'kelas');
		$this->session->set_flashdata('hapus_jadwal', 'Data Berhasil Dihapus !!');
		redirect(base_url('Admin/C_schedule'));
	}
}
