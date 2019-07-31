<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Manajemen
 *
 * @author casug
 */
class Manajemen extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(['M_User' => 'M_User', 'M_Manajemen' => 'M_Manajemen']);
        $this->result = $this->M_User->Checkuser();
    }

    function index() {
        $data = ['title' => 'Kepala Dinas | SIMANIS', 'value' => $this->M_Manajemen->index()];
        $data['content'] = $this->load->view('V_Manajemen', $data, true);
        $this->load->view('template', $data);
    }

}
