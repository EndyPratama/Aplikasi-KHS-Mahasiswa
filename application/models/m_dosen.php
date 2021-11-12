<?php  

class M_dosen extends CI_Model{

	public function tampil_data()
    {
        return $this->db
                    ->get('dosen');
    }

    public function tambah_data($data, $table){
        $this->db->insert($table, $data);
    }
}