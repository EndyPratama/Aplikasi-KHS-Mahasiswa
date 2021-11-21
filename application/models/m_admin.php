<?php

class M_admin extends CI_Model
{

    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('user ');
        $this->db->join('admin', 'user.id_user = admin.id_user');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_dosen()
    {
        $this->db->select('*');
        $this->db->from('user ');
        $this->db->join('dosen', 'user.id_user = dosen.id_user');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_mhs()

    {
        $this->db->select('*');
        $this->db->from('user ');
        $this->db->join('mahasiswa', 'user.id_user = mahasiswa.id_user');
        $query = $this->db->get();
        return $query;
    }

    public function tampil_akun()
    {
        $session = $_SESSION;
        $id_user = $this->session->userdata('id_user');
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->join('user', 'admin.id_user = user.id_user', 'LEFT');
        $this->db->where('admin.id_user', $id_user);
        $query = $this->db->get();
        return $query->result();
    }

    function tambah_data($data)
    {
        $user = [
            'username'  => $data['username'],
            'password'  => md5($data['password']),
            'email'     => $data['email'],
            'level'     => 'Admin',
            'keterangan'    => 'Aktif'
        ];
        $item = [
            'nama'          => $data['nama'],
            'no_telp'          => $data['no_telp'],
            'alamat' => $data['alamat']
        ];

        $this->db->trans_begin();
        $user['id_user'] = $this->db->insert_id();
        $this->db->insert('user', $user);
        $item['id_user'] = $this->db->insert_id();
        $this->db->insert('admin', $item);

        if ($this->db->trans_status() == true) {
            $this->db->trans_commit();
            return true;
        } else {
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
        $user = [
            'username'  => $data['username'],
            'password'  => md5($data['password']),
            'email'     => $data['email'],
            'level'     => 'Dosen',
            'keterangan'    => 'Aktif'
        ];
        $item = [
            'nama'          => $data['nama'],
            'nidn'          => $data['nidn']
        ];

        $this->db->trans_begin();
        $user['id_user'] = $this->db->insert_id();
        $this->db->insert('user', $user);
        $item['id_user'] = $this->db->insert_id();
        $this->db->insert('dosen', $item);

        if ($this->db->trans_status() == true) {
            $this->db->trans_commit();
            return true;
        } else {
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

    public function getID($id_admin)
    {
        $this->db->from('admin');
        $this->db->where('id_admin', $id_admin);
        $query = $this->db->get();
        return $query;
    }

    public function updateFile($id_user, $data)
    {
        $this->db->where('id_user', $id_user);
        return $this->db->update('user', $data);
    }

    public function update($id_admin, $data)
    {
        $this->db->where('id_admin', $id_admin);
        return $this->db->update('admin', $data);
    }

    function tambah_mhs($data)
    {
        $user = [
            'username'  => $data['username'],
            'password'  => md5($data['password']),
            'email'     => $data['email'],
            'level'     => 'Mahasiswa',
            'keterangan'    => 'Aktif'
        ];
        $item = [
            'nama'          => $data['nama'],
            'npm'          => $data['npm'],
            'dosen_wali'          => $data['dosen_wali']
        ];

        $this->db->trans_begin();
        $user['id_user'] = $this->db->insert_id();
        $this->db->insert('user', $user);
        $item['id_user'] = $this->db->insert_id();
        $this->db->insert('mahasiswa', $item);

        if ($this->db->trans_status() == true) {
            $this->db->trans_commit();
            return true;
        } else {
            $this->db->trans_rollback();
            return false;
        }
    }

    public function hapus_mhs($table, $where)
    {
        $spn = $this->db->delete($table, $where);
        return $spn;
    }

    public function updateuser($id_user, $data){
        $this->db->where('id_user', $id_user);
        return $this->db->update('user', $data);
    }
}
