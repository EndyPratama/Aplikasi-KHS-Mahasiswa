<?php

class M_admin extends CI_Model
{
    

    public function tampil_data()
    {
         $this->db->select('*');
                $this->db->from('user ');
                $this->db->join('admin','user.id_user = admin.id_user');
                $query = $this->db->get();
                return $query;
    }

    function tambah_data($data)
    {
        $user= [
            'username'  =>$data['username'],
            'password'  =>md5($data['password']),
            'email'     =>$data['email'],
            'level'     => 'Admin',
            'status'    => 'Aktif'
        ];
        $item = [
            'nama'          =>$data['nama'],
            'no_telp'          =>$data['no_telp'],
            'alamat' =>$data['alamat']
        ];

        $this->db->trans_begin();
        $user['id_user'] = $this->db->insert_id();
        $this->db->insert('user', $user);
        $item['id_user'] = $this->db->insert_id();
        $this->db->insert('admin', $item);
        
        if($this->db->trans_status()==true){
            $this->db->trans_commit();
            return true;
        }else{
            $this->db->trans_rollback();
            return false;
        }
            
    }

    public function hapus_data($table, $where)
    {
        $spn = $this->db->delete($table, $where);
        return $spn;
    }
}
