<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {
    public function registerUser($data) {
        $condition = "username =" . "'" . $data['username'] . "'"."and password ="."'".$data['password']."'";
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {

// Query to insert data in database
            $this->db->insert('users', $data);
            if ($this->db->affected_rows() > 0) {
                return true;
            }
        } else {
            return false;
        }
    }

}
