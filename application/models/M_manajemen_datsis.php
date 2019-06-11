<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_manajemen_datsis extends CI_Model {

    function index() {
        $exec = $this->db->select('*')
                ->from('manajemen_datsis')
                ->get()
                ->result();
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

    function Ubah($id) {
        $exec = $this->db->select('id_mdatsis,no_induk,nisn,nama_siswa,jenis_kelamin,tempat_lahir,tanggal_lahir,agama,nama_ibu,alamat')
                ->from('manajemen_datsis')
                ->where('manajemen_datsis.id_mdatsis', $id)
                ->get()
                ->result();
        return $exec;
    }

    function Simpan($data) {
        $this->db->trans_begin();
        $this->db->insert('manajemen_datsis', $data);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            echo '<script>alert("error, data gagal disimpan !");window.location.href = "' . base_url('manajemen_datsis/index') . '";</script>';
        } else {
            $this->db->trans_commit();
            echo '<script>alert("Success, data berhasil disimpan !");window.location.href = "' . base_url('manajemen_datsis/index') . '";</script>';
        }
    }

    function Perbarui($data) {
        $this->db->trans_begin();
        $this->db->set('nama_siswa_b', $data['nama_siswa_b'])->set('Jenis_kelamin_b', $data['Jenis_kelamin_b'])->set('tempat_lahir_b', $data['tempat_lahir_b'])->set('tanggal_lahir_b', $data['tanggal_lahir_b'])->set('agama_b', $data['agama_b'])->set('nama_ibu_b', $data['nama_ibu_b'])->set('alamat_b', $data['alamat_b'])->set('dokumen_pendukung', $data['dokumen_pendukung'])->where('manajemen_datsis.id_mdatsis', $data['id_mdatsis'])->update('manajemen_datsis');
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            echo '<script>alert("error, data gagal disimpan !");window.location.href = "' . base_url('manajemen_datsis/index') . '";</script>';
        } else {
            $this->db->trans_commit();
            echo '<script>alert("Success, data berhasil disimpan !");window.location.href = "' . base_url('manajemen_datsis/index') . '";</script>';
        }
    }

}
