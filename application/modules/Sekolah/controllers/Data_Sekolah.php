<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Sekolah extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(['M_datsek' => 'M_datsek', 'M_User' => 'auth']);
        $this->result = $this->auth->Checkuser();
    }

    public function index() {
        $data = ['title' => 'Administrator Sekolah | Data Sekolah', 'index' => $this->M_datsek->tampil_data()];
        $data['content'] = $this->load->view('v_tampil_sek', $data, true);
        $this->load->view('template', $data);
    }

    function tambah() {
        $data = ['title' => 'Administrator Sekolah | Tambah Data Sekolah'];
        $data['content'] = $this->load->view('v_input_sek', '', true);
        $this->load->view('template', $data);
    }

    function tambah_aksi() {
        $data = [
            'npsn' => $this->input->post('npsn'),
            'nama_sekolah' => $this->input->post('nama_sekolah'),
            'status' => $this->input->post('status'),
            'alamat_sekolah' => $this->input->post('alamat'),
            'kelurahan' => $this->input->post('kelurahan'),
            'kecamatan' => $this->input->post('kecamatan'),
            'kota' => $this->input->post('kota'),
            'provinsi' => $this->input->post('provinsi'),
            'no_telp' => $this->input->post('no_telp'),
            'email_sekolah' => $this->input->post('email_sekolah'),
            'nama_kepsek' => $this->input->post('nama_kepsek')
        ];
        $this->M_datsek->input_data($data, 'data_sekolah');
        redirect('Data_sekolah/index');
    }

    function hapus_data($id) {
        $where = ['id_sekolah' => $id];
        $this->M_datsek->hapus_data($where, 'data_sekolah');
        redirect('Data_sekolah/index');
    }

    function edit($id) {
        $where = ['id' => $id];
        $data['user'] = $this->M_datsek->edit_data($where, 'user')->result();
        $this->load->view('v_edit', $data);
    }

}
