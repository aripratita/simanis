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

    function Read() {
        $kecamatan = $this->db->select()->from('login')->join('kecamatan','login.id = kecamatan.id_kec','LEFT')->where('login.id',$this->session->userdata('id'))->get()->result();
        $exec = $this->db->select()
        ->from('data_sekolah')
        ->where('data_sekolah.kecamatan',$kecamatan[0]->nama_kec)
        ->get()
        ->result();
        return $exec;
    }

    function dtl_rekap(){
        $exec = $this->db->query('SELECT COUNT(*) AS tot,(SELECT COUNT(*) FROM data_siswa WHERE YEAR (CURDATE()) - YEAR ( tanggal_lahir) BETWEEN 0 AND 6) AS kurangdari7, (SELECT COUNT(*) FROM data_siswa WHERE YEAR (CURDATE()) - YEAR ( tanggal_lahir ) BETWEEN 7 AND 12) AS usia7sd12, (SELECT COUNT(*) FROM data_siswa WHERE YEAR (CURDATE()) - YEAR ( tanggal_lahir ) BETWEEN 12 AND 222) AS usiadiatas12, (SELECT COUNT(*) FROM data_siswa WHERE agama=1) AS islam, (SELECT COUNT(*) FROM data_siswa WHERE agama=3) AS kristen, (SELECT COUNT(*) FROM data_siswa WHERE agama=2) AS katolik, (SELECT COUNT(*) FROM data_siswa WHERE agama=4) AS hindu, (SELECT COUNT(*) FROM data_siswa WHERE agama=5) AS budha, (SELECT COUNT(*) FROM data_siswa WHERE agama=6) AS konghucu, (SELECT COUNT(*) FROM data_siswa WHERE agama=7) AS agamalain, (SELECT COUNT(*) FROM data_siswa WHERE `status`=3 AND nama_rombel=1 OR `status`=3 AND nama_rombel=2) AS mengulangkelas1, (SELECT COUNT(*) FROM data_siswa WHERE `status`=3 AND nama_rombel=3 OR `status`=3 AND nama_rombel=4) AS mengulangkelas2, (SELECT COUNT(*) FROM data_siswa WHERE `status`=3 AND nama_rombel=5 OR `status`=3 AND nama_rombel=6) AS mengulangkelas3, (SELECT COUNT(*) FROM data_siswa WHERE `status`=3 AND nama_rombel=7 OR `status`=3 AND nama_rombel=8) AS mengulangkelas4, (SELECT COUNT(*) FROM data_siswa WHERE `status`=3 AND nama_rombel=9 OR `status`=3 AND nama_rombel=10) AS mengulangkelas5, (SELECT COUNT(*) FROM data_siswa WHERE `status`=3 AND nama_rombel=11 OR `status`=3 AND nama_rombel=12) AS mengulangkelas6 FROM data_siswa LIMIT 1;')->result();
        return $exec;
    }
    
    function Baca($id) {
        $exec = $this->db->select('*')
                ->from('data_siswa')
                ->JOIN('data_sekolah', 'data_siswa.id_sekolah = data_sekolah.id_sekolah', 'LEFT')
                ->where('data_siswa.id_siswa', $id)
                ->get()
                ->result();
        return $exec;
    }

}
