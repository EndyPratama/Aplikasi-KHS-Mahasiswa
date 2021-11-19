<?php

class C_admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}


	public function index()
	{
		// echo "Hai Admin";
		$data['admin'] = $this->m_admin->tampil_data()->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('landing/admin/v_admin', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
		$data = $this->input->post();
		//memanggil model
		$this->m_admin->tambah_data($data);
		$this->session->set_flashdata('insert_admin', 'Data Berhasil Ditambahkan !!');
		redirect('C_admin');
	}

	public function delete($id_user)
	{
		$where1 = array('id_user' => $id_user);
		$where2 = array('id_user' => $id_user);

		$spn1 = $this->m_admin->hapus_data('admin', $where1);
		$spn2 = $this->m_admin->hapus_data('user', $where2);

		if ($spn1 >= 1) {
			if ($spn2 >= 1) {
				$this->session->set_flashdata('hapus_admin', 'Data Berhasil Dihapus !!');
				redirect('C_admin');
			}
			$this->session->set_flashdata('hapus_admin', 'Data Berhasil Dihapus !!');
			redirect('C_admin');
		}
	}
}
