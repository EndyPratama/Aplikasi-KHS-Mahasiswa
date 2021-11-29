<?php

class Setting_M extends CI_Model
{

    public function tampil_data($username)
    {
        $this->db->select('*');
        $this->db->from('dosen,user');
        $where = "user.id_user = dosen.id_user AND user.username = '$username' ";
        // $where = "dosen.id_user = user.id_user AND user.username = '$username'";
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }

    public function getDosen($id)
    {
        $this->db->select('*');
        $this->db->from('dosen ');
        $this->db->where('id_dosen', $id);
        $query = $this->db->get();
        return $query->result();
    }
}
