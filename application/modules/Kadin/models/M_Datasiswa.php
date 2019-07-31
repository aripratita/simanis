<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of M_Datasiswa
 *
 * @author casug
 */
class M_Datasiswa extends CI_Model {

    function index() {
        $exec = $this->db->select()->select('COUNT(*) AS tot,(SELECT COUNT(*) FROM data_siswa WHERE data_siswa.id_rombel = 1 OR data_siswa.id_rombel = 2) AS kelas1,(SELECT COUNT(*) FROM data_siswa WHERE data_siswa.id_rombel = 3 OR data_siswa.id_rombel = 4) AS kelas2,(SELECT COUNT(*) FROM data_siswa WHERE data_siswa.id_rombel = 5 OR data_siswa.id_rombel = 6) AS kelas3,(SELECT COUNT(*) FROM data_siswa WHERE data_siswa.id_rombel = 7 OR data_siswa.id_rombel = 8) AS kelas4,(SELECT COUNT(*) FROM data_siswa WHERE data_siswa.id_rombel = 9 OR data_siswa.id_rombel = 10) AS kelas5,(SELECT COUNT(*) FROM data_siswa WHERE data_siswa.id_rombel = 11 OR data_siswa.id_rombel = 12) AS kelas6')
                ->from('data_siswa')
                ->join('data_sekolah', 'data_siswa.id_sekolah = data_sekolah.id_sekolah', 'LEFT')
                ->group_by('data_siswa.id_sekolah')
                ->get()
                ->result();
//        print_r($this->db->last_query());
//        die;
        return $exec;
    }

}
