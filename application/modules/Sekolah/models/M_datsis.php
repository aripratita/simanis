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
                ->where('id_siswa', $id);
        return $this->db->get()->result();
    }

    function update_data($data) {
        $this->db->set('nama_siswa', $data['nama_siswa']);
        $this->db->set('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->set('tempat_lahir', $data['tempat_lahir']);
        $this->db->set('tanggal_lahir', $data['tanggal_lahir']);
        $this->db->set('agama', $data['agama']);
        $this->db->set('nama_ibu', $data['nama_ibu']);
        $this->db->set('alamat_siswa', $data['alamat_siswa']);
        $this->db->set('status', $data['status']);
        $this->db->set('foto', $data['foto']);
        $this->db->where('no_induk', $data['no_induk']);
        $this->db->update('data_siswa', $data);
        print_r($this->db->last_query());
        die;
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

}
