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

    public function tambah_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function getID($id){
        $this->db->from('kelas');
        $this->db->where('id', $id);
        $this->db->join('matkul', 'kelas.id_matkul = matkul.id_matkul', 'LEFT');
        $this->db->join('dosen', 'kelas.dosen = dosen.nama', 'LEFT');
        $this->db->join('thn_akademik', 'kelas.tahun = thn_akademik.id_akademik', 'LEFT');
        $query = $this->db->get();
        return $query;
    }

    public function updateFile($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('kelas', $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}