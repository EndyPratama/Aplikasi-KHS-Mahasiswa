<?php 

class C_dosen extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}

	public function index()
	{
		$data['dosen'] = $this->m_dosen->tampil_data()->result();
		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('landing/dosen/v_dosen',$data);
		$this->load->view('templates/footer');
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