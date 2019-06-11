<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('m_datadash');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		
       
	
		if ($this->session->userdata('username') == '') {
			redirect('Login');
		}
		else{
			$data['content'] = $this->load->view('v_dashboard','', True);
			if ($this->session->userdata('lvl') == 1) {
				$data['sidebar'] =$this->load->view('sidebar_kepdin','', TRUE);
				//echo "level 1";
			}
			elseif ($this->session->userdata('lvl') == 2) {
				$data['sidebar'] =$this->load->view('sidebar_dikdas','', TRUE);
				//echo "level 2";
			}
			elseif ($this->session->userdata('lvl') == 3) {
				$data['sidebar'] =$this->load->view('sidebar_satlak','', TRUE);
				//echo "level 3";
			}
			else {
				$data['sidebar'] =$this->load->view('sidebar_os','', TRUE);
				//echo "level 4";
			}
		}
		$this->load->view('template', $data);
		
	
	}

	public function home(){
		$this->load->view('v_tampilan_utama');
	}
}
