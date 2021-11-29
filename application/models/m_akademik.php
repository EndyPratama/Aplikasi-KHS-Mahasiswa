<?php

class M_akademik extends CI_Model
{

    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('thn_akademik');
        $query = $this->db->get();
        return $query->result();
    }

    public function tambah_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function getDataByID($id_akademik)
    {
        $this->db->from('thn_akademik');
        $this->db->where('id_akademik', $id_akademik);
        $query = $this->db->get();
        return $query;
    }

    public function updateFile($id_akademik, $data)
    {
        $this->db->where('id_akademik', $id_akademik);
        return $this->db->update('thn_akademik', $data);
    }

    public function hapus_data($table, $where)
    {
        $spn = $this->db->delete($table, $where);
        return $spn;
    }
}