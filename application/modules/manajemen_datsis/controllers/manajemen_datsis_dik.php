<?php

class manajemen_datsis_dik extends MY_Controller{

   public function __construct(){
       parent::__construct();
       $this->load->model('M_manajemen_datsis_dik');

   }

   function index() {
    $data['value'] = $this->M_manajemen_datsis_dik->index();
    $data['content'] = $this->load->view('V_manajemen_datsis_dik',$data, True);
    $data['sidebar'] =$this->load->view('sidebar_dikdas','', TRUE);
    $this->load->view('template',$data);

   }

}