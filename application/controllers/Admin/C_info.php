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

	public function password($id_user)
	{
		$data['data'] = $this->m_admin->getDataByID($id_user)->row();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('landing/info/v_password',$data);
		$this->load->view('templates/footer');
	}

	public function update_password()
	{
		$id_user = $this->input->post('id_user');
	
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if( $this->form_validation->run() == false) {

            $this->load->view('v_registrasi');
        }
        else {
            $data = [
                'password'      => md5($this->input->post('password1'))
            ];

            $update = $this->m_admin->updateuser($id_user, $data);
            if ($update) {
			$this->session->set_flashdata('update_password','Data Berhasil Diupdate !!');
			redirect(base_url('Admin/C_info'));
			}else{
			echo "Gagal";
			}
        }
	}
}