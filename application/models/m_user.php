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

    //Start: method tambahan untuk reset code  
    public function getUserInfo($id_user)
    {
        $q = $this->db->get_where('user', array('id_user' => $id_user), 1);
        if ($this->db->affected_rows() > 0) {
            $row = $q->row();
            return $row;
        } else {
            error_log('no user found getUserInfo(' . $id_user . ')');
            return false;
        }
    }

    public function getUserInfoByEmail($email)
    {
        $q = $this->db->get_where('user', array('email' => $email), 1);
        if ($this->db->affected_rows() > 0) {
            $row = $q->row();
            return $row;
        }
    }

    public function insertToken($user_id)
    {
        $token = substr(sha1(rand()), 0, 30);
        $date = date('Y-m-d');

        $string = array(
            'token' => $token,
            'user_id' => $user_id,
            'created' => $date
        );
        $query = $this->db->insert_string('tokens', $string);
        $this->db->query($query);
        return $token . $user_id;
    }

    public function isTokenValid($token)
    {
        $tkn = substr($token, 0, 30);
        $uid = substr($token, 30);

        $q = $this->db->get_where('tokens', array(
            'tokens.token' => $tkn,
            'tokens.user_id' => $uid
        ), 1);

        if ($this->db->affected_rows() > 0) {
            $row = $q->row();

            $created = $row->created;
            $createdTS = strtotime($created);
            $today = date('Y-m-d');
            $todayTS = strtotime($today);

            if ($createdTS != $todayTS) {
                return false;
            }

            $user_info = $this->getUserInfo($row->user_id);
            return $user_info;
        } else {
            return false;
        }
    }

    public function updatePassword($post)
    {
        $this->db->where('id_user', $post['id_user']);
        $this->db->update('user', array('password' => $post['password']));
        return true;
    }
    //End: method tambahan untuk reset code
}