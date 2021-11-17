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

    public function tampil_dosen()
    {
         $this->db->select('*');
                $this->db->from('user ');
                $this->db->join('dosen','user.id_user = dosen.id_user');
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

    function tambah_dosen($data)
    {
        $user= [
            'username'  =>$data['username'],
            'password'  =>md5($data['password']),
            'email'     =>$data['email'],
            'level'     => 'Dosen',
            'status'    => 'Aktif'
        ];
        $item = [
            'nama'          =>$data['nama'],
            'nidn'          =>$data['nidn']
        ];

        $this->db->trans_begin();
        $user['id_user'] = $this->db->insert_id();
        $this->db->insert('user', $user);
        $item['id_user'] = $this->db->insert_id();
        $this->db->insert('dosen', $item);
        
        if($this->db->trans_status()==true){
            $this->db->trans_commit();
            return true;
        }else{
            $this->db->trans_rollback();
            return false;
        }
            
    }

    public function hapus_dosen($table, $where)
    {
        $spn = $this->db->delete($table, $where);
        return $spn;
    }

    public function getDataByID($id_user)
    {
        $this->db->from('user');
        $this->db->where('id_user', $id_user);
        $query = $this->db->get();
        return $query;
    }

    public function updateFile($id_user, $data)
    {
        $this->db->where('id_user', $id_user);
        return $this->db->update('user', $data);
    }

}
