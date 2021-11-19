<?php 

class C_biodata extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->my_login->check_login();
	}

	public function index()
	{
		$data['mahasiswa'] = $this->m_mahasiswa->tampil();
		$this->load->view('templates/header');
		$this->load->view('templates_mahasiswa/sidebar');
		$this->load->view('mahasiswa/biodata/v_biodata',$data);
		$this->load->view('templates/footer');
	}

	public function update($id_mhs)
	{
		$data['data'] = $this->m_mahasiswa->getDataByID($id_mhs)->row();

		$this->load->view('templates/header');
		$this->load->view('templates_mahasiswa/sidebar');
		$this->load->view('mahasiswa/biodata/v_update',$data);
		$this->load->view('templates/footer');
	}

	public function update_aksi(){
		$id_mhs = $this->input->post('id_mhs');
		
		$data = $this->m_mahasiswa->getDataByID($id_mhs)->row();
		$nama = './uploads/'.$data->foto;

			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'png|jpeg|jpg|gif';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('userfile'))
			{

					$data = array(
					'nama'	=> $this->input->post('nama'),
					'npm'	=> $this->input->post('npm'),
					'dosen_wali'	=> $this->input->post('dosen_wali'),
					'no_telp'	=> $this->input->post('no_telp'),
					'jenis_kelamin'	=> $this->input->post('jenis_kelamin'),
					'tempat_lahir'	=> $this->input->post('tempat_lahir'),
					'tgl_lahir'	=> $this->input->post('tgl_lahir'),
					'alamat'	=> $this->input->post('alamat')
				);
				$update = $this->m_mahasiswa->updateFile($id_mhs, $data);

				if ($update) {
					$this->session->set_flashdata('update_mahasiswa','Data Berhasil Diupdate !!');
					redirect(base_url('mahasiswa/C_biodata'));
				}else{
					echo "Gagal";
				}
			}
			else{
				$upload_data = $this->upload->data();
				$name = $upload_data['file_name'];

				$data = array(
					'nama'	=> $this->input->post('nama'),
					'npm'	=> $this->input->post('npm'),
					'dosen_wali'	=> $this->input->post('dosen_wali'),
					'no_telp'	=> $this->input->post('no_telp'),
					'jenis_kelamin'	=> $this->input->post('jenis_kelamin'),
					'tempat_lahir'	=> $this->input->post('tempat_lahir'),
					'tgl_lahir'	=> $this->input->post('tgl_lahir'),
					'alamat'	=> $this->input->post('alamat'),
					'foto'	=> $name
				);
				$update = $this->m_mahasiswa->updateFile($id_mhs, $data);

				if ($update) {
					$this->session->set_flashdata('update_mahasiswa','Data Berhasil Diupdate !!');
					redirect(base_url('mahasiswa/C_biodata'));
				}else{
					echo "Gagal";
				}
			}			
		
	}

	public function password($id_user)
	{
		$data['data'] = $this->m_user->getDataID($id_user)->row();

		$this->load->view('templates/header');
		$this->load->view('templates_mahasiswa/sidebar');
		$this->load->view('mahasiswa/biodata/v_password',$data);
		$this->load->view('templates/footer');
	}

	public function update_user()
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

            $update = $this->m_user->updateuser($id_user, $data);
            if ($update) {
			$this->session->set_flashdata('update_biodata','Data Berhasil Diupdate !!');
			redirect(base_url('mahasiswa/C_biodata'));
			}else{
			echo "Gagal";
			}
        }
	}
}