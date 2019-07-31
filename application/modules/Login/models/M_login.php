<?php

/**
 * 
 */
class M_login extends MY_Controller {

    function login($data) {
        $query = $this->db->select('*')->from('login')->where('username', $data['username'])->where('password', $data['password'])->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

}
