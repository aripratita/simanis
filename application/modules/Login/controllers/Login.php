<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(['M_login', 'M_User']);
    }

    function index() {
        if ($this->session->userdata('username') == '') {
            $this->load->View('Login/v_login');
        } else {
            if ($this->session->userdata('lvl') == 1) {
                redirect('Kadin/Dashboard/index', 'refresh');
            } elseif ($this->session->userdata('lvl') == 2) {
                redirect('Sekdikdas/Dashboard/index', 'refresh');
            } elseif ($this->session->userdata('lvl') == 3) {
                redirect('Satlak/Dashboard/index', 'refresh');
            } elseif ($this->session->userdata('lvl') == 4) {
                redirect('Sekolah/Dashboard/index', 'refresh');
            } else {
                $this->load->View('Login/v_login');
            }
        }
    }

    function proses() {
        $data = ['username' => $this->input->post('username'), 'password' => $this->input->post('password')];
        $panggil = $this->M_login->login($this->security->xss_clean($data));
        if ($panggil == true) {
            $session = ['id' => $panggil[0]->id, 'username' => $panggil[0]->username, 'lvl' => $panggil[0]->lvl];
            $this->session->set_userdata($session);
            $response = [
                'status' => 200,
                'lvl' => $panggil[0]->lvl
            ];
        } else {
            $response = [
                'status' => 201,
                'message' => 'Maaf, username dan password Anda salah. Harap periksa kembali username dan password Anda.'
            ];
        }
        $this->output
                ->set_status_header($response['status'])
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                ->_display();
        exit;
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('Login', 'refersh');
    }

}
