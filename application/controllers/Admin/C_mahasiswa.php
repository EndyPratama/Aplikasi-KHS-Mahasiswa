<?php

class C_mahasiswa extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}

	public function index()
	{
		$data['mahasiswa'] = $this->m_mahasiswa->tampil_data();
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('landing/mahasiswa/v_mahasiswa', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$nama 			= $this->input->post('nama');
		$npm			= $this->input->post('npm');
		$jenis_kelamin	= $this->input->post('jenis_kelamin');
		$dosen_wali		= $this->input->post('dosen_wali');
		$no_telp		= $this->input->post('no_telp');
		$tempat_lahir	= $this->input->post('tempat_lahir');
		$tgl_lahir		= $this->input->post('tgl_lahir');
		$alamat			= $this->input->post('alamat');
		$foto 			= $_FILES['foto'];
		if ($foto = '') {
		} else {
			$config['upload_path'] 		= './uploads';
			$config['allowed_types'] 	= 'png|jpeg|jpg|gif';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('foto')) {
				echo "foto Gagal diupload!";
				die();
			} else {
				$foto = $this->upload->data('file_name');
			}
		}
		$data = array(
			'nama'			=> $nama,
			'npm'			=> $npm,
			'jenis_kelamin'	=> $jenis_kelamin,
			'dosen_wali'	=> $dosen_wali,
			'no_telp'		=> $no_telp,
			'tempat_lahir'	=> $tempat_lahir,
			'tgl_lahir'		=> $tgl_lahir,
			'alamat'		=> $alamat,
			'foto'			=> $foto
		);

		$this->m_mahasiswa->tambah_data($data, 'mahasiswa');
		$this->session->set_flashdata('insert_mhs', 'Data Berhasil Ditambahkan !!');
		redirect('Admin/C_mahasiswa');
	}

	public function update($id_mhs)
	{
		$data['data'] = $this->m_mahasiswa->getDataByID($id_mhs)->row();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('landing/mahasiswa/v_update', $data);
		$this->load->view('templates/footer');
	}

	public function update_aksi()
	{
		$id_mhs = $this->input->post('id_mhs');

		$data = $this->m_mahasiswa->getDataByID($id_mhs)->row();
		$nama = './uploads/' . $data->foto;

		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'png|jpeg|jpg|gif';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('userfile')) {

			$data = array(
				'nama'	=> $this->input->post('nama'),
				'npm'	=> $this->input->post('npm'),
				'jenis_kelamin'	=> $this->input->post('jenis_kelamin'),
				'dosen_wali'	=> $this->input->post('dosen_wali'),
				'tempat_lahir'	=> $this->input->post('tempat_lahir'),
				'tgl_lahir'	=> $this->input->post('tgl_lahir'),
				'no_telp'	=> $this->input->post('no_telp'),
				'alamat'	=> $this->input->post('alamat')
			);
			$update = $this->m_mahasiswa->updateFile($id_mhs, $data);

			if ($update) {
				$this->session->set_flashdata('update_mhs', 'Data Berhasil Diupdate !!');
				redirect(base_url('Admin/C_mahasiswa'));
			} else {
				echo "Gagal";
			}
		} else {
			$upload_data = $this->upload->data();
			$name = $upload_data['file_name'];

			$data = array(
				'nama'	=> $this->input->post('nama'),
				'npm'	=> $this->input->post('npm'),
				'jenis_kelamin'	=> $this->input->post('jenis_kelamin'),
				'dosen_wali'	=> $this->input->post('dosen_wali'),
				'tempat_lahir'	=> $this->input->post('tempat_lahir'),
				'tgl_lahir'	=> $this->input->post('tgl_lahir'),
				'no_telp'	=> $this->input->post('no_telp'),
				'alamat'	=> $this->input->post('alamat'),
				'foto'	=> $name
			);
			$update = $this->m_mahasiswa->updateFile($id_mhs, $data);

			if ($update) {
				$this->session->set_flashdata('update_mhs', 'Data Berhasil Diupdate !!');
				redirect(base_url('Admin/C_mahasiswa'));
			} else {
				echo "Gagal";
			}
		}
	}

	public function delete($id_mhs)
	{
		$where = array('id_mhs' => $id_mhs);
		$this->m_mahasiswa->hapus_data($where, 'mahasiswa');
		$this->session->set_flashdata('hapus_mhs', 'Data Berhasil Dihapus !!');
		redirect('Admin/C_mahasiswa');
	}

	public function detail($id_mhs)
	{
		$data['mahasiswa'] = $this->m_mahasiswa->ambil_id($id_mhs);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('landing/mahasiswa/v_detail', $data);
		$this->load->view('templates/footer');
	}
}
