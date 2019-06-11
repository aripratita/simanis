<?php

class M_manajemen_datsis_dik extends CI_Model{

    function index() {
        $exec = $this->db->select('*')
                ->from('manajemen_datsis')
                ->get()
                ->result();
        return $exec;
    }
}