<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class manajemen_datsis extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_manajemen_datsis', 'datsis');
    }

    function index() {
        $data = array(
            'title' => 'Manajemen Data Siswa',
            'value' => $this->datsis->index()
        );
        $data['manajemen_datsis'] = $this->datsis->index();
		$data['content'] = $this->load->view('V_manajemen_datsis',$data, True);
		$data['sidebar'] =$this->load->view('sidebar_os','', TRUE);
		$this->load->view('template',$data);
    }

    // function Tambah() {
    //     $data = array(
    //         'title' => 'Tambah Data Siswa'
    //     );
    //     $data['content'] = $this->load->view('V_Tambah_datsis',$data, True);
	// 	$data['sidebar'] =$this->load->view('sidebar_os','', TRUE);
	// 	$this->load->view('template',$data);
  
    // }

    function Baca($id) {
        $data = array(
            'title' => 'Detail Data Siswa',
            'value' => $this->datsis->Baca($id),
            'addclass' => ''
        );
        $data['content'] = $this->load->view('V_Detail_datsis',$data, True);
		$data['sidebar'] =$this->load->view('sidebar_os','', TRUE);
		$this->load->view('template',$data);
 
    }

    function Ubah($id) {
        $data = array(
            'title' => 'Ubah Data Siswa',
            'value' => $this->datsis->Ubah($id)
        );
        $data['content'] = $this->load->view('V_Ubah_datsis',$data, True);
		$data['sidebar'] =$this->load->view('sidebar_os','', TRUE);
		$this->load->view('template',$data);

    }

    function Simpan() {
        $config['upload_path'] = './Uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|xls|xlsx|doc|docx|pdf';
        $config['max_size'] = '1000';
        $config['file_name'] = date("Y_m_d") . $this->input->post('no_induk');
        $config['overwrite'] = TRUE;
        $config['file_ext_tolower'] = TRUE;
        $config['detect_mime'] = TRUE;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('dokumen')) {
            echo '<script>alert("Terjadi kesalahan, ulangi atau hubungi administrator !");window.location.href = "' . base_url('manajemen_datsis/index') . '";</script>';
        } else {
            $upload = $this->upload->data();
            $data = array(
                'no_induk' => $this->input->post('no_induk'),
                'nisn' => $this->input->post('nisn'),
                'nama_siswa' => $this->input->post('nama_siswa'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'agama' => $this->input->post('agama'),
                'nama_ibu' => $this->input->post('nama_ibu'),
                'alamat' => $this->input->post('alamat'),
                'dokumen_pendukung' => base_url('Uploads/' . $upload['file_name'] . ' '),
                'syscreateuser' => '1', //nanti diisi dengan session user
                'syscreatedate' => date("Y-m-d H:i:s")
            );
            $this->datsis->Simpan($data);
        }
    }

    function Perbarui($id) {
        $value = $this->datsis->Ubah($id);
        $config['upload_path'] = './Uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|txt|xls|xlsx|doc|docx|pdf';
        $config['max_size'] = '1000';
        $config['file_name'] = $value[0]->no_induk;
        $config['overwrite'] = TRUE;
        $config['file_ext_tolower'] = TRUE;
        $config['detect_mime'] = TRUE;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('doctxt')) {
            echo '<script>alert("Terjadi kesalahan, ulangi atau hubungi administrator !");window.location.href = "' . base_url('manajemen_datsis/index') . '";</script>';
        } else {
            $upload = $this->upload->data();
            $data = array(
                'id_mdatsis' => $id,
                'nama_siswa_b' => $this->input->post('namabaru'),
                'Jenis_kelamin_b' => $this->input->post('jkel'),
                'tempat_lahir_b' => $this->input->post('tempat'),
                'tanggal_lahir_b' => $this->input->post('tgl'),
                'agama_b' => $this->input->post('agama'),
                'nama_ibu_b' => $this->input->post('ibutxt'),
                'alamat_b' => $this->input->post('alamat'),
                'dokumen_pendukung' => base_url('Uploads/' . $upload['file_name'] . ' ')
            );
            $this->datsis->Perbarui($data);
        }
    }

    function Cetak($id) {
        $value = $this->datsis->Baca($id);
        $this->load->library('ciqrcode');
        $config['cacheable'] = true; //boolean, the default is true
        $config['cachedir'] = './assets/'; //string, the default is application/cache/
        $config['errorlog'] = './assets/'; //string, the default is application/logs/
        $config['imagedir'] = './assets/qrcode/'; //direktori penyimpanan qr code
        $config['quality'] = true; //boolean, the default is true
        $config['size'] = '1024'; //interger, the default is 1024
        $config['black'] = array(224, 255, 255); // array, default is array(255,255,255)
        $config['white'] = array(70, 130, 180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
        $image_name = 'qr_' . $value[0]->no_induk . '.png'; //buat name dari qr code sesuai dengan nim

        $params['data'] = $value[0]->no_induk; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH . $config['imagedir'] . $image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params);
        $dat = array(
            'title' => 'Print Data Siswa',
            'value' => $value,
            'addclass' => 'hidden'
        );
        $mpdf = new \Mpdf\Mpdf();
        $data = $this->load->view('Print_datsis', $dat, TRUE);
        $mpdf->WriteHTML($data);
        $mpdf->Output();
    }

}




