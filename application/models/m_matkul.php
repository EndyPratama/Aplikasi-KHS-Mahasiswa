<?php  

class M_matkul extends CI_Model{

	public function tampil_data()
    {
         $this->db->select('*');
                $this->db->from('matkul');
                $this->db->join('dosen','matkul.id_dosen = dosen.id_dosen', 'LEFT');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil_sem1()
    {
         $this->db->select('*');
                $this->db->from('matkul');
                $this->db->join('dosen','matkul.id_dosen = dosen.id_dosen', 'LEFT');
                $this->db->where('matkul.semester = "1"');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil_sem2()
    {
         $this->db->select('*');
                $this->db->from('matkul');
                $this->db->join('dosen','matkul.id_dosen = dosen.id_dosen', 'LEFT');
                $this->db->where('matkul.semester = "2"');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil_sem3()
    {
         $this->db->select('*');
                $this->db->from('matkul');
                $this->db->join('dosen','matkul.id_dosen = dosen.id_dosen', 'LEFT');
                $this->db->where('matkul.semester = "3"');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil_sem4()
    {
         $this->db->select('*');
                $this->db->from('matkul');
                $this->db->join('dosen','matkul.id_dosen = dosen.id_dosen', 'LEFT');
                $this->db->where('matkul.semester = "4"');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil_sem5()
    {
         $this->db->select('*');
                $this->db->from('matkul');
                $this->db->join('dosen','matkul.id_dosen = dosen.id_dosen', 'LEFT');
                $this->db->where('matkul.semester = "5"');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil_sem6()
    {
         $this->db->select('*');
                $this->db->from('matkul');
                $this->db->join('dosen','matkul.id_dosen = dosen.id_dosen', 'LEFT');
                $this->db->where('matkul.semester = "6"');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil_sem7()
    {
         $this->db->select('*');
                $this->db->from('matkul');
                $this->db->join('dosen','matkul.id_dosen = dosen.id_dosen', 'LEFT');
                $this->db->where('matkul.semester = "7"');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil_sem8()
    {
         $this->db->select('*');
                $this->db->from('matkul');
                $this->db->join('dosen','matkul.id_dosen = dosen.id_dosen', 'LEFT');
                $this->db->where('matkul.semester = "8"');
        $query = $this->db->get();
        return $query->result();
    }

    public function tampil_mhs()
    {
        $session = $_SESSION;
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
                $this->db->from('matkul_mhs');
                $this->db->join('matkul','matkul_mhs.id_matkul = matkul.id_matkul', 'LEFT');
                $this->db->join('dosen','matkul.id_dosen = dosen.id_dosen', 'LEFT');
                $this->db->where('matkul_mhs.id_user',$id_user);
        $query = $this->db->get();
        return $query->result();
    }

    public function tambah_aksi($data, $table){
        $this->db->insert($table, $data);
    }

    public function tambah_data($data, $table){
        $this->db->insert($table, $data);
    }

    public function getDataByID($id_matkul){
        $this->db->from('matkul');
        $this->db->where('id_matkul', $id_matkul);
        $this->db->join('dosen', 'matkul.id_dosen = dosen.id_dosen', 'LEFT');
        $query = $this->db->get();
        return $query;
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
