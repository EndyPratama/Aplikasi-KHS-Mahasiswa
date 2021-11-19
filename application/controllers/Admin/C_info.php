<?php 

class C_info extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}

	public function index()
	{
		$data['admin'] = $this->m_admin->tampil_akun();
		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('landing/info/v_info',$data);
		$this->load->view('templates/footer');
	}

	public function update($id_admin)
	{
		$data['data'] = $this->m_admin->getID($id_admin)->row();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('landing/info/v_update',$data);
		$this->load->view('templates/footer');
	}

	public function update_aksi()
	{
		$id_admin = $this->input->post('id_admin');

		$data = array(
			'nama'			=> $this->input->post('nama'),
			'no_telp'			=> $this->input->post('no_telp'),
			'alamat'			=> $this->input->post('alamat')
		);
		$update = $this->m_admin->update($id_admin, $data);

		if ($update) {
			$this->session->set_flashdata('update_akun','Data Berhasil Diupdate !!');
			redirect(base_url('Admin/C_info'));
		}else{
			echo "Gagal";
			}
	}
}