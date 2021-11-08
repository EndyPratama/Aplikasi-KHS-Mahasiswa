<?php  

class M_nilai extends CI_Model{

	public function tampil_data()
    {
        $this->db->select('*');
                $this->db->from('nilai');
                $this->db->join('mahasiswa', 'nilai.npm = mahasiswa.npm', 'LEFT');
                $this->db->join('matkul','nilai.id_matkul = matkul.id_matkul', 'LEFT');
        $query = $this->db->get()->result();
        return $query;
    }
    public function tambah_data($data, $table){
        $this->db->insert($table, $data);
    }

    public function getDataByID($id_nilai){
        $this->db->from('nilai');
        $this->db->where('id_nilai', $id_nilai);
        $this->db->join('mahasiswa', 'nilai.npm = mahasiswa.npm', 'LEFT');
        $this->db->join('matkul', 'nilai.id_matkul = matkul.id_matkul', 'LEFT');
        $query = $this->db->get();
        return $query;
    }

    public function updateFile($id_nilai, $data){
        $this->db->where('id_nilai', $id_nilai);
        return $this->db->update('nilai', $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

}