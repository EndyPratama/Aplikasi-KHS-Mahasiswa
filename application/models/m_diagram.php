<?php
Class m_diagram extends CI_Model
{
  function matkul()
    {
        $data = $this->db->query("
        SELECT matkul.nama_matkul, COUNT(matkul.id_matkul) AS total
        FROM matkul,nilai
        WHERE matkul.id_matkul = nilai.id_matkul
        GROUP BY matkul.nama_matkul");
        return $data->result();
    }

    function ambil_data($nama_matkul)
    {
        $data = $this->db->query("
        SELECT mahasiswa.nama,mahasiswa.npm, nilai.nilai
        FROM matkul,nilai,mahasiswa
        WHERE matkul.id_matkul = nilai.id_matkul AND matkul.nama_matkul = '$nama_matkul' AND mahasiswa.npm = nilai.npm");
        return $data->result();
    }
}
?>