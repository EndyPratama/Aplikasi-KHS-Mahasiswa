<?php 

class C_usermhs extends CI_Controller{

	public function index()
	{
		$data['mahasiswa'] = $this->m_admin->tampil_mhs()->result();
		$data['dosen'] = $this->m_dosen->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('landing/usermhs/v_user',$data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$data = $this->input->post();
            //memanggil model
        $this->m_admin->tambah_mhs($data);
		$this->session->set_flashdata('insert_mhs','Data Berhasil Ditambahkan !!');
		redirect('C_usermhs');
		
	}

	public function delete($id_user)
	{
		$where1 = array('id_user' => $id_user);
		$where2 = array('id_user' => $id_user);

		$spn1 = $this->m_admin->hapus_mhs('mahasiswa', $where1);
		$spn2 = $this->m_admin->hapus_mhs('user', $where2);

		if($spn1>=1){
			if($spn2>=1){
			$this->session->set_flashdata('hapus_mhs','Data Berhasil Dihapus !!');
			redirect('C_usermhs');
			}
			$this->session->set_flashdata('hapus_mhs','Data Berhasil Dihapus !!');
			redirect('C_usermhs');
		}
	}

	public function update($id_user)
	{
		$data['data'] = $this->m_admin->getDataByID($id_user)->row();

		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('landing/usermhs/v_update', $data);
        $this->load->view('templates/footer');
	}


	public function update_aksi()
	{
		$id_user = $this->input->post('id_user');

		$data = array(
			'keterangan'			=> $this->input->post('keterangan')
		);
		$update = $this->m_admin->updateFile($id_user, $data);

		if ($update) {
			$this->session->set_flashdata('update_mhs','Data Berhasil Diupdate !!');
			redirect(base_url('C_usermhs'));
		}else{
			echo "Gagal";
			}
	}
}

