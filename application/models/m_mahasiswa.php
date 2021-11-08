<?php  

class M_mahasiswa extends CI_Model{

	public function tampil_data()
    {
        return $this->db
                    ->get('mahasiswa')
                    ->result();
    }
    public function tambah_data($data, $table){
        $this->db->insert($table, $data);
    }

    public function getDataByID($id_mhs){
        return $this->db->get_where('mahasiswa', array('id_mhs'=>$id_mhs));
    }

    public function updateFile($id_mhs, $data){
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
        $hasil = $this->db->where('id_mhs',$id_mhs)->get('mahasiswa');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else{
            return false;
        }
    }

    public function ambil($npm){
        $this->db->select('mahasiswa.nama');
        $this->db->from('mahasiswa');
        $this->db->where('mahasiswa.npm', $npm);
        $query = $this->db->get();
        return $query->row()->nama;
    }

    public function ambil_matkul($npm){
        $this->db->select('matkul.nama_matkul, nilai.nilai');
        $this->db->from('mahasiswa');
        $this->db->join('nilai', 'mahasiswa.npm = nilai.npm', 'RIGHT');
        $this->db->join('matkul', 'nilai.id_matkul = matkul.id_matkul', 'RIGHT');
        $this->db->where('mahasiswa.npm', $npm);
        $query = $this->db->get();
        return $query->result();
    }

}