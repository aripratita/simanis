<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Datasekolah extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(['M_User' => 'M_User', 'M_Datasiswa' => 'M_Datasiswa']);
        $this->result = $this->M_User->Checkuser();
    }

    function index() {
        $data = ['title' => 'Kepala Dinas | SIMANIS'];
        $data['content'] = $this->load->view('V_Datasekolah', $data, true);
        $this->load->view('template', $data);
    }

}
