<?php

class M_mahasiswa extends CI_Model
{

    public function tampil_data()
    {
        $this->db->select('mahasiswa.id_mhs,mahasiswa.foto ,mahasiswa.nama, mahasiswa.npm, mahasiswa.jenis_kelamin, dosen.nama AS dosen');
        $this->db->from('mahasiswa,dosen');
        $where = "mahasiswa.dosen_wali = dosen.id_dosen";
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil()
    {
        $session = $_SESSION;
        $id_user = $this->session->userdata('id_user');
        return $this->db
            ->where('id_user', $id_user)
            ->get('mahasiswa')
            ->result();
    }

    public function tambah_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function getDataByID($id_mhs)
    {
        return $this->db->get_where('mahasiswa', array('id_mhs' => $id_mhs));
    }

    public function updateFile($id_mhs, $data)
    {
        $this->db->where('id_mhs', $id_mhs);
        return $this->db->update('mahasiswa', $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function ambil_id($id_mhs)
    {
        $hasil = $this->db->where('id_mhs', $id_mhs)->get('mahasiswa');
        if ($hasil->num_rows() > 0) {
            return $hasil->result();
        } else {
            return false;
        }
    }

    public function ambil($npm)
    {
        $this->db->select('mahasiswa.nama');
        $this->db->from('mahasiswa');
        $this->db->where('mahasiswa.npm', $npm);
        $query = $this->db->get();
        return $query->row()->nama;
    }

    public function ambil_transkrip($npm)
    {
        $this->db->select('transkrip.id_mhs,mahasiswa.nama,mahasiswa.npm,matkul.nama_matkul,transkrip.nilai');
        $this->db->from('mahasiswa,transkrip,matkul');
        $where = "transkrip.id_mhs = mahasiswa.id_mhs AND transkrip.id_matkul = matkul.id_matkul AND transkrip.status = 'Selesai'";
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }
}
