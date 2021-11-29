<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matkul_M extends CI_Model
{
    public function getIdDosen($username)
    {
        $this->db->select("dosen.id_dosen AS id");
        $this->db->from("dosen,user");
        $where = "dosen.id_user = user.id_user AND user.username = '$username'";
        $this->db->where($where);
        $query = $this->db->get();
        return $query->row()->id;
    }
    public function tampil_kelas($idDosen)
    {
        $db = $this->db;
        $db->select("*");
        $db->from("kelas,dosen,matkul,thn_akademik");
        $where = "dosen.nama = kelas.dosen AND kelas.id_matkul = matkul.id_matkul AND kelas.tahun = thn_akademik.id_akademik AND dosen.id_dosen = $idDosen";
        $db->where($where);
        $query = $db->get();
        return $query->result();
    }
}
