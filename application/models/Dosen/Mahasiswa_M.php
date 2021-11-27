<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_M extends CI_Model
{
    function getDataMahasiswa($dosen)
    {
        $this->db->select("*");
        $this->db->from("mahasiswa");
        $this->db->where("dosen_wali", $dosen);
        $query = $this->db->get();
        return $query->result();
    }
    function getDetailMahasiswa($mhs)
    {
        $this->db->select("*");
        $this->db->from("mahasiswa");
        $this->db->where("id_mhs", $mhs);
        $query = $this->db->get();
        return $query->result();
    }
    function getIdDosen($dosen)
    {
        $this->db->select("id_dosen");
        $this->db->from("dosen,user");
        $where = "dosen.id_user = user.id_user AND user.username = '$dosen'";
        $this->db->where($where);
        $query = $this->db->get();
        return $query->row()->id_dosen;
    }
    public function getTranskripMahasiswa($idMhs)
    {
        $this->db->select("*");
        $this->db->from("transkrip,matkul");
        $where = "transkrip.id_matkul = matkul.id_matkul AND transkrip.id_mhs = $idMhs AND transkrip.nilai != 0";
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }
    public function getIpkMahasiswa($mhs)
    {
        $this->db->select("AVG(nilai) AS ipk");
        $this->db->from("transkrip");
        $where = "transkrip.id_mhs = $mhs AND transkrip.nilai != 0";
        $this->db->where($where);
        $query = $this->db->get();
        return $query->row()->ipk;
    }
    public function getTotalSKS($mhs)
    {
        $this->db->select("SUM(matkul.sks) AS sks");
        $this->db->from("transkrip,matkul");
        $where = "transkrip.id_matkul = matkul.id_matkul AND transkrip.id_mhs = $mhs AND transkrip.nilai != 0";
        $this->db->where($where);
        $query = $this->db->get();
        return $query->row()->sks;
    }
}
