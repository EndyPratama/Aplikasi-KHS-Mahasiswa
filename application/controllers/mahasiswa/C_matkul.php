<?php

class C_matkul extends CI_Controller
{


	function __construct()
	{
		parent::__construct();
		$this->load->model('m_matkul'); // Auto load model M_Index pada fungsi construct
		$this->load->model('m_dosen'); // Auto load model M_Index pada fungsi construct
		$this->my_login->check_login();
	}
	public function index()
	{
		$user = $this->session->userdata('username');
		$id_mhs = $this->m_matkul->getIdMhs($user);
		$data['matkul'] = $this->m_matkul->tampil_mhs($id_mhs);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// $data['dosen'] = $this->m_dosen->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates_mahasiswa/sidebar');
		$this->load->view('mahasiswa/matkul/v_matkul', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_data()
	{
		$this->load->view('templates/header');
		$this->load->view('templates_mahasiswa/sidebar');
		$this->load->view('mahasiswa/matkul/v_tambah');
		$this->load->view('templates/footer');
	}

	public function sem1()
	{
		$data['matkul'] = $this->m_matkul->tampil_sem1();
		$data['dosen'] = $this->m_dosen->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates_mahasiswa/sidebar');
		$this->load->view('mahasiswa/matkul/v_sem1', $data);
		$this->load->view('templates/footer');
	}

	public function sem2()
	{
		$data['matkul'] = $this->m_matkul->tampil_sem2();
		$data['dosen'] = $this->m_dosen->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates_mahasiswa/sidebar');
		$this->load->view('mahasiswa/matkul/v_sem1', $data);
		$this->load->view('templates/footer');
	}

	public function sem3()
	{
		$data['matkul'] = $this->m_matkul->tampil_sem3();
		$data['dosen'] = $this->m_dosen->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates_mahasiswa/sidebar');
		$this->load->view('mahasiswa/matkul/v_sem1', $data);
		$this->load->view('templates/footer');
	}

	public function sem4()
	{
		$data['matkul'] = $this->m_matkul->tampil_sem4();
		$data['dosen'] = $this->m_dosen->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates_mahasiswa/sidebar');
		$this->load->view('mahasiswa/matkul/v_sem1', $data);
		$this->load->view('templates/footer');
	}

	public function sem5()
	{
		$data['matkul'] = $this->m_matkul->tampil_sem5();
		$data['dosen'] = $this->m_dosen->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates_mahasiswa/sidebar');
		$this->load->view('mahasiswa/matkul/v_sem1', $data);
		$this->load->view('templates/footer');
	}

	public function sem6()
	{
		$data['matkul'] = $this->m_matkul->tampil_sem6();
		$data['dosen'] = $this->m_dosen->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates_mahasiswa/sidebar');
		$this->load->view('mahasiswa/matkul/v_sem1', $data);
		$this->load->view('templates/footer');
	}

	public function sem7()
	{
		$data['matkul'] = $this->m_matkul->tampil_sem7();
		$data['dosen'] = $this->m_dosen->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates_mahasiswa/sidebar');
		$this->load->view('mahasiswa/matkul/v_sem1', $data);
		$this->load->view('templates/footer');
	}

	public function sem8()
	{
		$data['matkul'] = $this->m_matkul->tampil_sem8();
		$data['dosen'] = $this->m_dosen->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates_mahasiswa/sidebar');
		$this->load->view('mahasiswa/matkul/v_sem1', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_matkul()
	{
		$id_matkul 			= $this->input->post('id_matkul');

		$session = $_SESSION;
		$data = array(
			'id_user'           => $this->session->userdata('id_user'),
			'id_matkul'			=> $id_matkul
		);

		$this->m_matkul->tambah_aksi($data, 'matkul_mhs');
		$this->session->set_flashdata('insert_matkul', 'Data Berhasil Ditambahkan !!');
		redirect('mahasiswa/C_matkul');
	}
}
