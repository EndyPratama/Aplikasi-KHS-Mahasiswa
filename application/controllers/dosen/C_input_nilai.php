<?php
defined('BASEPATH') or exit('No direct script access allowed');
class C_input_nilai extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->my_login->check_login();
        $this->load->model('Dosen/Nilai_M', 'Nilai');
    }

    public function index()
    {
        $user = $this->session->userdata('username');
        $id_mhs = $this->Nilai->getIdDosen($user);
        // echo $id_mhs;
        $data['matkul'] = $this->Nilai->tampil_kelas($id_mhs);
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        $this->load->view('templates/header');
        $this->load->view('templates_dosen/sidebar');
        $this->load->view('Dosen/V_Nilai', $data);
        $this->load->view('templates/footer');
    }
    public function Data_Mahasiswa($idMatkul)
    {
        $mahasiswa = $this->Nilai->getMahasiswaByMatkul($idMatkul);
        $data = [
            'mahasiswa' => $mahasiswa,
            'idMatkul'  => $idMatkul
        ];
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        $this->load->view('templates/header');
        $this->load->view('templates_dosen/sidebar');
        $this->load->view('Dosen/V_Nilai_input', $data);
        $this->load->view('templates/footer');
    }
    public function inputNilaiMahasiswa()
    {
        $transkripID = $this->input->post('transkrip');
        // $transkripID = 12;
        $uts = $this->input->post('uts');
        $uas = $this->input->post('uas');
        $nilai = $this->input->post('nilai');
        $idMatkul = $this->input->post('idMatkul');

        $data = [
            'nilai_uts'   => $uts,
            'nilai_uas'   => $uas,
            'nilai' => $nilai,
        ];
        $this->db->where('id', $transkripID);
        $this->db->update('transkrip', $data);
        redirect(base_url('/Dosen/C_input_nilai/Data_Mahasiswa/' . $idMatkul));
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        // echo "Masuk";
        // return "MAsuk";
    }
}
