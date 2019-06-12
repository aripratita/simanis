<?php

class Data_Siswa extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(['M_manajemen_datsis_dik' => 'datsis', 'M_User' => 'auth']);
        $this->result = $this->auth->Checkuser();
    }

    function index() {
        $data = ['title' => 'Manajemen Data Siswa | SIMANIS'];
        $data['value'] = $this->datsis->index();
        $data['content'] = $this->load->view('V_Data_Siswa', $data, true);
        $this->load->view('template', $data);
    }

    function Tambah() {
        echo 'kampret';
    }

}
