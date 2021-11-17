<?php 

class C_userdosen extends CI_Controller{

	public function index()
	{
		$data['dosen'] = $this->m_admin->tampil_dosen()->result();
		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('landing/userdosen/v_user',$data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$data = $this->input->post();
            //memanggil model
        $this->m_admin->tambah_dosen($data);
		$this->session->set_flashdata('insert_dosen','Data Berhasil Ditambahkan !!');
		redirect('C_userdosen');
		
	}

	public function delete($id_user)
	{
		$where1 = array('id_user' => $id_user);
		$where2 = array('id_user' => $id_user);

		$spn1 = $this->m_admin->hapus_dosen('dosen', $where1);
		$spn2 = $this->m_admin->hapus_dosen('user', $where2);

		if($spn1>=1){
			if($spn2>=1){
			$this->session->set_flashdata('hapus_dosen','Data Berhasil Dihapus !!');
			redirect('C_userdosen');
			}
			$this->session->set_flashdata('hapus_dosen','Data Berhasil Dihapus !!');
			redirect('C_userdosen');
		}
	}

	public function update($id_user)
	{
		$data['data'] = $this->m_admin->getDataByID($id_user)->row();

		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('landing/userdosen/v_update', $data);
        $this->load->view('templates/footer');
	}


	public function update_aksi()
	{
		$id_user = $this->input->post('id_user');

		$data = array(
			'status'			=> $this->input->post('status')
		);
		$update = $this->m_admin->updateFile($id_user, $data);

		if ($update) {
			$this->session->set_flashdata('update_dosen','Data Berhasil Diupdate !!');
			redirect(base_url('C_userdosen'));
		}else{
			echo "Gagal";
			}
	}
}

