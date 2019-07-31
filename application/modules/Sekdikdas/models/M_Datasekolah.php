<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class M_Datasekolah extends CI_Model {
function tampil_data() {
        $exec = $this->db->select()
                ->from('data_sekolah')
                ->where('id_operator', $this->session->userdata('id'), false)
                ->get()
                ->result();
        return $exec;
    }
}