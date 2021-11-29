<?php

class M_schedule extends CI_Model
{
	public function tampil_data($id_akademik)
    {
        $db = $this->db;
        $db->select("*");
        $db->from("kelas,dosen,matkul,thn_akademik");
        $where = "dosen.nama = kelas.dosen AND kelas.id_matkul = matkul.id_matkul AND kelas.tahun = thn_akademik.id_akademik AND kelas.tahun = $id_akademik";
        $db->where($where);
        $query = $db->get();
        return $query->result();
    }

    public function getDataByID($id_akademik)
    {
        $this->db->from('thn_akademik');
        $this->db->where('id_akademik', $id_akademik);
        $query = $this->db->get();
        return $query;
    }
}