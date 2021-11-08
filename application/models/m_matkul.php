<?php  

class M_matkul extends CI_Model{

	public function tampil_data()
    {
        return $this->db
                    ->get('matkul')
                    ->result();
    }
    public function tambah_data($data, $table){
        $this->db->insert($table, $data);
    }

    public function getDataByID($id_matkul){
        return $this->db->get_where('matkul', array('id_matkul'=>$id_matkul));
    }

    public function updateFile($id_matkul, $data){
        $this->db->where('id_matkul', $id_matkul);
        return $this->db->update('matkul', $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

}