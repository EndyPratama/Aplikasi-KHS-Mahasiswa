<?php  

class M_user extends CI_Model{

    public function tampil()
    {
        $session = $_SESSION;
        $id_user = $this->session->userdata('id_user');
        return $this->db
                    ->where('id_user',$id_user)
                    ->get('user')
                    ->result();
    }

    public function getDataByID($id_user){
        return $this->db->get_where('user', array('id_user'=>$id_user));
    }

    public function updateFile($id_user, $data){
        $this->db->where('id_user', $id_user);
        return $this->db->update('user', $data);
    }

     public function getDataID($id_user){
        return $this->db->get_where('user', array('id_user'=>$id_user));
    }

    public function updateuser($id_user, $data){
        $this->db->where('id_user', $id_user);
        return $this->db->update('user', $data);
    }
}