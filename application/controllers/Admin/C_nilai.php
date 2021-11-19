<?php 

class C_nilai extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}

	public function index()
	{
		$data['nilai'] = $this->m_nilai->tampil_data();
		$data['mahasiswa'] = $this->m_mahasiswa->tampil_data();
		$data['matkul'] = $this->m_matkul->tampil_data();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('landing/nilai/v_nilai',$data);
		$this->load->view('templates/footer');
	}

	public function tambah_aksi()
	{
        $data = array(
            'nilai' 			=> $this->input->post('nilai'),
            'npm' 		=> $this->input->post('npm'),
            'id_matkul' 		=> $this->input->post('id_matkul')
        );

		$this->m_nilai->tambah_data($data,'nilai');
		$this->session->set_flashdata('insert_nilai','Data Berhasil Ditambahkan !!');
		redirect('Admin/C_nilai');
		
	}

	public function update($id_nilai)
	{
		$data['data'] = $this->m_nilai->getDataByID($id_nilai)->row();
		$data['mahasiswa'] = $this->m_mahasiswa->tampil_data();
		$data['matkul'] = $this->m_matkul->tampil_data();

		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('landing/nilai/v_update', $data);
        $this->load->view('templates/footer');
	}

	public function update_aksi()
	{
		$id_nilai = $this->input->post('id_nilai');
		
		$nilai 				= $this->input->post('nilai');
		$npm 				= $this->input->post('npm');
		$id_matkul 		= $this->input->post('id_matkul');

		$data = array(
			'nilai'				=> $nilai,
			'npm'				=> $npm,
			'id_matkul'		=> $id_matkul
		);
		$update = $this->m_nilai->updateFile($id_nilai, $data);

		if ($update) {
			$this->session->set_flashdata('update_nilai','Data Berhasil Diupdate !!');
			redirect(base_url('Admin/C_nilai'));
		}else{
			echo "Gagal";
			}
	}

	public function delete($id_nilai)
	{
		$where = array('id_nilai'=> $id_nilai);
		$this->m_mahasiswa->hapus_data($where,'nilai');
		$this->session->set_flashdata('hapus_nilai','Data Berhasil Dihapus !!');
		redirect('Admin/C_nilai');
	}
}