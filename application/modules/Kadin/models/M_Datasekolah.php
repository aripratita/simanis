<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_Datasekolah
 *
 * @author casug
 */
class M_Datasekolah extends CI_Model {

    function index() {
        $exec = $this->db->select('*')
                ->from('data_sekolah')
                ->get()
                ->result();
        return $exec;
    }

}
