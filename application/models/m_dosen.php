<?php

class M_dosen extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->get('dosen');
    }

    public function tambah_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function getDataByID($id_dosen)
    {
        $this->db->from('dosen');
        $this->db->where('id_dosen', $id_dosen);
        $query = $this->db->get();
        return $query;
    }

    public function updateFile($id_dosen, $data)
    {
        $this->db->where('id_dosen', $id_dosen);
        return $this->db->update('dosen', $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    
}
