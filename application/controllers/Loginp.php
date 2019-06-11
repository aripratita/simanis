<?php

/**
 * 
 */
class Login extends CI_Controller{

	
	function __construct(){
		parent::__construct();
		$this->load->model('M_login');
	}

	function index(){
		$this->load->view('v_login');
	}

	public function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$instansi = $this->input->post('instansi');
		$where = array(
			'username' => $username,
			'password' => $password,
			'instansi' => $instansi);
		
		$cek = $this->M_login->cek_login("login",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login");
			$this->session->set_userdata($data_session);

			redirect(base_url("admin"));
		}else{
			echo "username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}