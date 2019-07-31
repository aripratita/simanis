<?php

/**
 * 
 */
class M_datsek extends CI_Model {

    function tampil_data() {
        $exec = $this->db->select()
                ->from('data_sekolah')
                ->where('id_operator', $this->session->userdata('id'), false)
                ->get()
                ->result();
        return $exec;
    }

    function input_data($data, $table) {
        $this->db->insert($table, $data);
    }

    function hapus_data($where, $table) {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function edit_data($where, $table) {
        return $this->db->get_where($table, $where);
    }

}
