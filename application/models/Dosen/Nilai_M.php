<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai_M extends CI_Model
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
        $db->from("kelas,dosen,matkul");
        $where = "dosen.nama = kelas.dosen AND kelas.id_matkul = matkul.id_matkul AND dosen.id_dosen = $idDosen";
        $db->where($where);
        $query = $db->get();
        return $query->result();
    }
    public function getMahasiswaByMatkul($id_matkul)
    {
        $db = $this->db;
        $db->select("*");
        $db->from("transkrip,mahasiswa");
        $where = "mahasiswa.id_mhs = transkrip.id_mhs AND transkrip.id_matkul = $id_matkul";
        $db->where($where);
        $query = $db->get();
        return $query->result();
    }
}
