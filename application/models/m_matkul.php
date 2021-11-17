<?php

class M_matkul extends CI_Model
{

    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('matkul');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil_sem1()
    {
        $this->db->select('*');
        $this->db->from('matkul');
        $this->db->join('dosen', 'matkul.id_dosen = dosen.id_dosen', 'LEFT');
        $this->db->where('matkul.semester = "1"');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil_sem2()
    {
        $this->db->select('*');
        $this->db->from('matkul');
        $this->db->join('dosen', 'matkul.id_dosen = dosen.id_dosen', 'LEFT');
        $this->db->where('matkul.semester = "2"');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil_sem3()
    {
        $this->db->select('*');
        $this->db->from('matkul');
        $this->db->join('dosen', 'matkul.id_dosen = dosen.id_dosen', 'LEFT');
        $this->db->where('matkul.semester = "3"');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil_sem4()
    {
        $this->db->select('*');
        $this->db->from('matkul');
        $this->db->join('dosen', 'matkul.id_dosen = dosen.id_dosen', 'LEFT');
        $this->db->where('matkul.semester = "4"');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil_sem5()
    {
        $this->db->select('*');
        $this->db->from('matkul');
        $this->db->join('dosen', 'matkul.id_dosen = dosen.id_dosen', 'LEFT');
        $this->db->where('matkul.semester = "5"');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil_sem6()
    {
        $this->db->select('*');
        $this->db->from('matkul');
        $this->db->join('dosen', 'matkul.id_dosen = dosen.id_dosen', 'LEFT');
        $this->db->where('matkul.semester = "6"');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil_sem7()
    {
        $this->db->select('*');
        $this->db->from('matkul');
        $this->db->join('dosen', 'matkul.id_dosen = dosen.id_dosen', 'LEFT');
        $this->db->where('matkul.semester = "7"');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil_sem8()
    {
        $this->db->select('*');
        $this->db->from('matkul');
        $this->db->join('dosen', 'matkul.id_dosen = dosen.id_dosen', 'LEFT');
        $this->db->where('matkul.semester = "8"');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil_mhs($mhs)
    {
        $this->db->select('matkul.nama_matkul, kelas.dosen, kelas.kelas, kelas.hari, kelas.mulai, kelas.selesai, matkul.sks');
        $this->db->from('kelas, transkrip, matkul');
        $where = "matkul.id_matkul = transkrip.id_matkul AND transkrip.status = 'Berlangsung' AND transkrip.tahun = kelas.tahun AND transkrip.id_matkul = kelas.id_matkul AND transkrip.id_mhs = $mhs";
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
        /*
        SELECT matkul.nama_matkul, kelas.dosen, kelas.kelas, kelas.Hari, kelas.mulai, kelas.selesai
        FROM kelas, transkrip, matkul
        WHERE matkul.id_matkul = transkrip.id_matkul AND transkrip.status = "Berlangsung" AND transkrip.tahun = kelas.tahun AND transkrip.id_matkul = kelas.id_matkul
        */
    }

    public function getIdMhs($username)
    {
        $this->db->select("mahasiswa.id_mhs AS id");
        $this->db->from("mahasiswa,user");
        $where = "mahasiswa.id_user = user.id_user AND user.username = '$username'";
        $this->db->where($where);
        $query = $this->db->get();
        return $query->row()->id;
        /*
        SELECT , mahasiswa.nama
        FROM mahasiswa,user
        WHERE mahasiswa.id_user = user.id_user AND user.username = "endy"
        */
    }

    public function tambah_aksi($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function tambah_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function getDataByID($id_matkul)
    {
        $this->db->from('matkul');
        $this->db->where('id_matkul', $id_matkul);
        $query = $this->db->get();
        return $query;
    }

    public function updateFile($id_matkul, $data)
    {
        $this->db->where('id_matkul', $id_matkul);
        return $this->db->update('matkul', $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
