<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_Manajemen
 *
 * @author casug
 */
class M_Manajemen extends CI_Model {

    function index() {
        $exec = $this->db->select()
                ->from('manajemen_datsis')
                ->get()
                ->result();
        return $exec;
    }

}
