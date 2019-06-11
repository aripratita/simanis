<?php

class Login extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
	
	
	}

	function index(){
		$this->load->View('v_login');
	}

	function proses(){
		$data = array('username' => $this->input->post('username'), 'password' => $this->input->post('password'));

		$panggil = $this->M_login->login($data);

		if ($panggil == true) {
			$session = array('username' =>$panggil[0]->username,'lvl'=>$panggil[0]->lvl);
			$this->session->set_userdata($session);
			redirect('Dashboard');

		}
		else {
			redirect('Login/Login/index','refersh');
		}

	}

	function logout(){
		$this->session->sess_destroy();
		redirect('Login','refersh');
	}
		
}
?>