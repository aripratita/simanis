<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Datasiswa
 *
 * @author casug
 */
class Datasiswa extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(['M_User' => 'M_User', 'M_Datasiswa' => 'M_Datasiswa']);
        $this->result = $this->M_User->Checkuser();
    }

    function index() {
        $data = ['title' => 'SATLAK Cakung | SIMANIS','value'=>$this->M_Datasiswa->Read()];
        $data['content'] = $this->load->view('V_Datasiswa', $data, true);
        $this->load->view('template', $data);
    }

    function detail_rekap(){
            $data = ['title' => 'Administrator | Rekap Data Siswa | SIMANIS', 'value' => $this->M_Datasiswa->dtl_rekap()];
            $data['content'] = $this->load->view('  V_detailrekap', $data, true);
            $this->load->view('template', $data);
    
    }
    function Baca($id) {
        $data = [
            'title' => 'Detail Data Siswa',
            'value' => $this->M_Datasiswa->Baca($id),
            'addclass' => ''
        ];
        $data['content'] = $this->load->view('V_detailrekap', $data, true);
        $this->load->view('template', $data);
    }

}
