<?php
class m_diagram extends CI_Model
{
    function matkul()
    {
        $data = $this->db->query("
        SELECT matkul.nama_matkul, COUNT(transkrip.id_mhs) AS total
        FROM matkul
        LEFT JOIN transkrip ON matkul.id_matkul=transkrip.id_matkul
        GROUP BY matkul.nama_matkul");
        return $data->result();
    }

    function ambil_data($nama_matkul)
    {
        // echo $nama_matkul;
        // $test = string($nama_matkul);
        // echo $test;
        $matkul = (string) $nama_matkul;
        $data = $this->db->query("
        SELECT matkul.nama_matkul, mahasiswa.nama
        FROM matkul
        LEFT JOIN transkrip ON matkul.id_matkul=transkrip.id_matkul
        LEFT JOIN mahasiswa ON transkrip.id_mhs = mahasiswa.id_mhs");
        return $data->result();
    }
}
