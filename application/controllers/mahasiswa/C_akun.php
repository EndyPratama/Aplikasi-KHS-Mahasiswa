<?php 

class C_akun extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();

	}

	public function index()
	{
		$data['user'] = $this->m_user->tampil('user');
		$this->load->view('templates/header');
        $this->load->view('templates_mahasiswa/sidebar');
        $this->load->view('mahasiswa/user/v_user',$data);
        $this->load->view('templates/footer');
	}

	public function update($id_user)
	{
		$data['data'] = $this->m_user->getDataByID($id_user)->row();

		$this->load->view('templates/header');
        $this->load->view('templates_mahasiswa/sidebar');
        $this->load->view('mahasiswa/user/v_update', $data);
        $this->load->view('templates/footer');
	}

	public function update_aksi()
	{
		$id_user = $this->input->post('id_user');
		
		$username 				= $this->input->post('username');
		$email 				= $this->input->post('email');

		$data = array(
			'username'				=> $username,
			'email'				=> $email
		);
		$update = $this->m_user->updateFile($id_user, $data);

		if ($update) {
			$this->session->set_flashdata('update_user','Data Berhasil Diupdate !!');
			redirect(base_url('mahasiswa/C_akun'));
		}else{
			echo "Gagal";
			}
	}


}