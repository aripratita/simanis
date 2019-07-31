<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_datsis extends CI_Model {

    function tampil_data() {
        $exec = $this->db->select('*')
                ->from('data_siswa')
                ->where('status !=', 5)
                ->get()
                ->result();
        return $exec;
    }

    function input_data($data, $table) {
        $this->db->insert($table, $data);
    }

    function hapus_data($where, $table) {
        $this->db->set('status', 5);
        $this->db->where($where);
        $this->db->update($table);
    }

    function edit_data($id) {
        $this->db->select('id_siswa,no_induk,nisn,nama_siswa,jenis_kelamin,tempat_lahir,tanggal_lahir,agama,nama_ibu,alamat_siswa,status,foto')
                ->from('data_siswa')
                ->where($id);
        return $this->db->get()->result();
    }

    function update_data($data) {
        $this->db->where('no_induk', $data['no_induk']);
        // $this->db->update('data_siswa', $data);
        // print_r($this->db->last_query());
        return $this->db->update('data_siswa', $data);
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

    function Simpan($data) {
        $this->db->trans_begin();
        $this->db->insert('Data_Siswa', $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            echo '<script>alert("error, data gagal disimpan !");window.location.href = "' . base_url('Data_Siswa/index') . '";</script>';
        } else {
            $this->db->trans_commit();
            echo '<script>alert("Success, data berhasil disimpan !");window.location.href = "' . base_url('Data_Siswa/index') . '";</script>';
        }
    }

    function rekap() {
        $exec = $this->db->query('SELECT COUNT(*) AS tot,(SELECT COUNT(*) FROM data_siswa WHERE YEAR (CURDATE()) - YEAR ( tanggal_lahir) BETWEEN 0 AND 6) AS kurangdari7, (SELECT COUNT(*) FROM data_siswa WHERE YEAR (CURDATE()) - YEAR ( tanggal_lahir ) BETWEEN 7 AND 12) AS usia7sd12, (SELECT COUNT(*) FROM data_siswa WHERE YEAR (CURDATE()) - YEAR ( tanggal_lahir ) BETWEEN 12 AND 222) AS usiadiatas12, (SELECT COUNT(*) FROM data_siswa WHERE agama=1) AS islam, (SELECT COUNT(*) FROM data_siswa WHERE agama=3) AS kristen, (SELECT COUNT(*) FROM data_siswa WHERE agama=2) AS katolik, (SELECT COUNT(*) FROM data_siswa WHERE agama=4) AS hindu, (SELECT COUNT(*) FROM data_siswa WHERE agama=5) AS budha, (SELECT COUNT(*) FROM data_siswa WHERE agama=6) AS konghucu, (SELECT COUNT(*) FROM data_siswa WHERE agama=7) AS agamalain, (SELECT COUNT(*) FROM data_siswa WHERE `status`=3 AND nama_rombel=1 OR `status`=3 AND nama_rombel=2) AS mengulangkelas1, (SELECT COUNT(*) FROM data_siswa WHERE `status`=3 AND nama_rombel=3 OR `status`=3 AND nama_rombel=4) AS mengulangkelas2, (SELECT COUNT(*) FROM data_siswa WHERE `status`=3 AND nama_rombel=5 OR `status`=3 AND nama_rombel=6) AS mengulangkelas3, (SELECT COUNT(*) FROM data_siswa WHERE `status`=3 AND nama_rombel=7 OR `status`=3 AND nama_rombel=8) AS mengulangkelas4, (SELECT COUNT(*) FROM data_siswa WHERE `status`=3 AND nama_rombel=9 OR `status`=3 AND nama_rombel=10) AS mengulangkelas5, (SELECT COUNT(*) FROM data_siswa WHERE `status`=3 AND nama_rombel=11 OR `status`=3 AND nama_rombel=12) AS mengulangkelas6 FROM data_siswa LIMIT 1;')->result();
        return $exec;
    }

}
