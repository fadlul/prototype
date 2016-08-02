<?php

if (!defined('BASEPATH'))
    exit('Akses langsung tidak diperbolehkan');

class L_login {

    // SET SUPER GLOBAL  
    var $CI = NULL;

    public function __construct() {
        $this->CI = & get_instance();
    }

    // Fungsi login  
    public function login($username, $password) {
        $query = $this->CI->db->get_where('users', array('username' => $username, 'password' => $password));
        if ($query->num_rows() == 1) {
            $row = $this->CI->db->query('SELECT iduser,idrule,userrule FROM users where username = "' . $username . '"');
            $admin = $row->row();
            $id = $admin->iduser;
            $this->CI->session->set_userdata('username', $username);
            $this->CI->session->set_userdata('id_login', uniqid(rand()));
            $this->CI->session->set_userdata('id', $id);
            $data=array('user' => $username);
            if ($admin->idrule==1) {
                redirect('admin/dashboard');
            }else{
                // switch ($admin->userrule) {
                //     case '1':
                    redirect('dashboard1');
                    //     break;
                    // case '2':
                    // redirect('dashboard2');
                    //     break;
                    // case '3':
                    // redirect('dashboard3');
                    //         break;
                    // default:
                    //     # code...
                    //     break;
                // }
            }
        } else {
            $this->CI->session->set_flashdata('sukses', 'Username atau password anda salah, silakan coba lagi.. ');
            redirect(site_url('auth/login'));
        }
        return false;
    }

    // Proteksi halaman  
    public function cek_login() {
        if ($this->CI->session->userdata('username') == '') {
            $this->CI->session->set_flashdata('sukses', 'Anda belum login');
        }else{
            redirect('dashboard1');
        }
    }

    // Fungsi logout  
    public function logout() {
        $this->CI->session->unset_userdata('username');
        $this->CI->session->unset_userdata('id_login');
        $this->CI->session->unset_userdata('id');
        $this->CI->session->set_flashdata('sukses', 'Anda berhasil logout');
        redirect('home');
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

