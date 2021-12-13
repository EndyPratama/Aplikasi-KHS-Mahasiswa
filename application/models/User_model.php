<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    function select($data)
    {
        $item = array('username' => $data['username'], 'password' => md5($data['password']));
        //$item2 = array('email' => $data['username'], 'password' => md5($data['password']));
        $result = $this->db->get_where('user', $item);

        if ($result->num_rows() > 0) {
            $user = $result->result()[0];
            $this->session->set_userdata('username', $user->username);
            if ($user->level == "Admin") {
                echo "Hai admin";
                $datauser = $this->db->get_where('admin', array('id_user' => $user->id_user))->result_array()[0];
                $datauser['level'] = $user->level;
                return $datauser;
                $this->session->set_userdata('sessionuser', $datauser);
            } elseif ($user->level == "Dosen") {
                $datauser = $this->db->get_where('dosen', array('id_user' => $user->id_user))->result_array()[0];
                $datauser['level'] = $user->level;
                return $datauser;
                $this->session->set_userdata('sessionuser', $datauser);
            } elseif ($user->level == "Mahasiswa") {
                $datauser = $this->db->get_where('mahasiswa', array('id_user' => $user->id_user))->result_array()[0];
                $datauser['level'] = $user->level;
                return $datauser;
                $this->session->set_userdata('sessionuser', $datauser);
            }
        } else
            return $result->result();
    }

    function cek_status($data)
    {
        $item = array('username' => $data['username'], 'password' => md5($data['password']));
        //$item2 = array('email' => $data['username'], 'password' => md5($data['password']));
        $result = $this->db->get_where('user', $item);

        if ($result->num_rows() > 0) {
            $user = $result->result()[0];
            $this->session->set_userdata('username', $user->username);
            if ($user->status == "Aktif") {
                $datauser['status'] = $user->status;
                return $datauser;
                $this->session->set_userdata('sessionuser', $datauser);
            } elseif ($user->status == "Tidak") {
                $datauser['status'] = $user->status;
                return $datauser;
                $this->session->set_userdata('sessionuser', $datauser);
            }
        } else
            return $result->result();
    }
}
