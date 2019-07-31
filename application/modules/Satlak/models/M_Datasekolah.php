<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class M_Datasekolah extends CI_Model {

    function Read() {
        $kecamatan = $this->db->select()->from('login')->join('kecamatan','login.id = kecamatan.id_kec','LEFT')->where('login.id',$this->session->userdata('id'))->get()->result();
        $exec = $this->db->select()
        ->from('data_sekolah')
        ->where('data_sekolah.kecamatan',$kecamatan[0]->nama_kec)
        ->get()
        ->result();
        return $exec;
    }
    }