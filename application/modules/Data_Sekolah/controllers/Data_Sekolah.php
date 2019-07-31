<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Data_Sekolah extends MY_Controller
{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('M_datsek');
		$this->load->helper('url');

	}
	

	public function index(){
		$data['index'] = $this->M_datsek->tampil_data()->result();
		$data['content'] = $this->load->view('v_tampil_sek',$data, True);
		$data['sidebar'] =$this->load->view('sidebar_os','', TRUE);
		$this->load->view('template',$data);
		
	}

	function tambah(){
		$data['content'] = $this->load->view('v_input_sek','', True);
		$data['sidebar'] =$this->load->view('sidebar_os','', TRUE);
		$this->load->view('template',$data);
	}

	function tambah_aksi(){
		$npsn = $this->input->post('npsn');
		$nama_sekolah = $this->input->post('nama_sekolah');
		$status = $this->input->post('status');
		$alamat = $this->input->post('alamat');
		$kelurahan = $this->input->post('kelurahan');
		$kecamatan = $this->input->post('kecamatan');
		$kota = $this->input->post('kota');
		$provinsi = $this->input->post('provinsi');
		$no_telp = $this->input->post('no_telp');
		$email_sekolah = $this->input->post('email_sekolah');
		$nama_kepsek = $this->input->post('nama_kepsek')
		;

	$data = [
		'npsn' => $npsn,
		'nama_sekolah' => $nama_sekolah, 
		'status' => $status,
		'alamat_sekolah' => $alamat,
		'kelurahan' => $kelurahan,
		'kecamatan' => $kecamatan,
		'kota' => $kota,
		'provinsi' => $provinsi, 
		'no_telp' => $no_telp, 
		'email_sekolah' => $email_sekolah, 
		'nama_kepsek' => $nama_kepsek
	
	];

	$this->m_data_sekolah->input_data($data,'data_sekolah');
	redirect('Data_sekolah/index');

	}

	function hapus_data($id){
		$where = ['id_sekolah' => $id];
		$this->M_datsek->hapus_data($where,'data_sekolah');
		redirect('Data_sekolah/index');

	}

	function edit($id){
		$where = ['id' => $id];
		$data['user'] = $this->m_data->edit_data($where,'user')->result();
		$this->load->view('v_edit',$data);
		
	}
}