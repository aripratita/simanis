<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M__User
 *
 * @author casug
 */
class M_User extends MY_Controller {

    function Checkuser() {
        $exec = $this->db->select('*')
                ->from('login')
                ->where('username', $this->session->userdata('username'))
                ->where('id', $this->session->userdata('id'))
                ->where('lvl', $this->session->userdata('lvl'))
                ->get()
                ->result();
        if ($exec == false) {
            $this->session->sess_destroy();
            redirect('Login/index', 'refresh');
        } else {
            return $exec;
        }
    }

}
