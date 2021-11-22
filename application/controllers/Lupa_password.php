<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lupa_password extends CI_Controller
{
    public function index()
    {

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $config['site_url'] = 'http://localhost/Aplikasi-KHS-Mahasiswa/';


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('v_lupa_password');
        } else {
            $email = $this->input->post('email');
            $clean = $this->security->xss_clean($email);
            $userInfo = $this->m_user->getUserInfoByEmail($clean);

            if (!$userInfo) {
                $this->session->set_flashdata('notif', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                  <strong> Email address salah, silakan coba lagi.!!</strong>
                                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>');
                redirect(site_url('Auth'), 'refresh');
            }

            //build token   

            $token = $this->m_user->insertToken($userInfo->id_user);
            $qstring = $this->base64url_encode($token);
            $url = site_url() . '/lupa_password/reset_password/token/' . $qstring;
            $link = '<a href="' . $url . '">' . $url . '</a>';

            $message = '';
            $message .= '<strong>Hai, anda menerima email ini karena ada permintaan untuk memperbaharui  
                 password anda.</strong><br>';
            $message .= '<strong>Silakan klik link ini:</strong> ' . $link;

            echo $message; //send this through mail  
            exit;
        }
    }

    public function reset_password()
    {
        $token = $this->base64url_decode($this->uri->segment(4));
        $cleanToken = $this->security->xss_clean($token);

        $user_info = $this->m_user->isTokenValid($cleanToken); //either false or array();          

        if (!$user_info) {
             $this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                  <strong> Token tidak valid atau kadaluarsa!!</strong>
                                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>');
            redirect(site_url('Auth'), 'refresh');
        }

        $data = array(
            'email' => $user_info->email,
            'token' => $this->base64url_encode($token)
        );

        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('v_reset_password', $data);
        } else {

            $post = $this->input->post(NULL, TRUE);
            $cleanPost = $this->security->xss_clean($post);
            $hashed = md5($cleanPost['password']);
            $cleanPost['password'] = $hashed;
            $cleanPost['id_user'] = $user_info->id_user;
            unset($cleanPost['passconf']);
            if (!$this->m_user->updatePassword($cleanPost)) {
                $this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                  <strong> Update password gagal.!!</strong>
                                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>');
            } else {
                $this->session->set_flashdata('notif', 'Password anda sudah  
             diperbaharui. Silakan login.');
            }
           redirect(site_url('Auth'), 'refresh');
        }
    }

    public function base64url_encode($data)
    {
        return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }

    public function base64url_decode($data)
    {
        return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
    }
}