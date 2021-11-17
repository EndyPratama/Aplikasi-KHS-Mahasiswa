<?php 

class C_dosen extends CI_Controller{

	public function index()
	{
		$data['dosen'] = $this->m_dosen->tampil_data()->result();
		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('landing/dosen/v_dosen',$data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$nidn 			= $this->input->post('nidn');
		$nama				= $this->input->post('nama');
		$jenis_kelamin 				= $this->input->post('jenis_kelamin');
		$alamat 		= $this->input->post('alamat');
		$no_telp 				= $this->input->post('no_telp');
		$id_user 				= $this->input->post('id_user');
		$foto 			= $_FILES['foto'];
		if($foto = ''){}else{
			$config['upload_path'] = './uploads';
			$config['allowed_types'] = 'png|jpeg|jpg|gif|doc|docx|pdf';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('foto')){
				echo "foto Gagal diupload!"; die();
			}else {
				$foto = $this->upload->data('file_name');
			}
		}

		$session = $_SESSION;
		$data = array(
			'id_user' 			=> $this->session->userdata('id_user'),
			'nidn'			=> $nidn,
			'nama'				=> $nama,
			'jenis_kelamin'		=> $jenis_kelamin,
			'alamat'		=> $alamat,
			'no_telp'			=> $no_telp,
			'id_user'			=> $id_user,
			'foto'			=> $foto
		);

		$this->m_dosen->tambah_data($data,'dosen');
		$this->session->set_flashdata('insert_dosen','Data Berhasil Ditambahkan !!');
		redirect('C_dosen');
		
	}

	public function update($id_dosen)
	{
		$data['data'] = $this->m_dosen->getDataByID($id_dosen)->row();

		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('landing/dosen/v_update', $data);
        $this->load->view('templates/footer');
	}


	public function update_aksi()
	{
		$id_dosen = $this->input->post('id_dosen');

		$data = array(
			'nama_dosen'			=> $this->input->post('nama_dosen'),
			'sks'			=> $this->input->post('sks'),
			'semester'			=> $this->input->post('semester')
		);
		$update = $this->m_dosen->updateFile($id_dosen, $data);

		if ($update) {
			$this->session->set_flashdata('update_dosen','Data Berhasil Diupdate !!');
			redirect(base_url('C_dosen'));
		}else{
			echo "Gagal";
			}
	}

	public function delete($id_dosen)
	{
		$where = array('id_dosen'=> $id_dosen);
		$this->m_dosen->hapus_data($where,'dosen');
		$this->session->set_flashdata('hapus_dosen','Data Berhasil Dihapus !!');
		redirect('C_dosen');
	}
}