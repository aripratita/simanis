<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Siswa extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('M_datsis');
    }

    function index() {
        $data = ['title' => 'Administrator | Data Siswa | SIMANIS'];
        $data['data_siswa'] = $this->M_datsis->tampil_data();
        $data['content'] = $this->load->view('v_tampil_sis', $data, True);
        $this->load->view('template', $data);
    }

    function tambah() {
        $data = ['title' => 'Tambah data siswa | SIMANIS'];
        $data['content'] = $this->load->view('v_input_sis', '', True);
        $this->load->view('template', $data);
    }

    function tambah_aksi() {
        $config['upload_path'] = './Uploads/foto_siswa/';
        $config['allowed_types'] = 'jpg|jpeg|png|xls|xlsx|doc|docx|pdf';
        $config['max_size'] = '1000';
        $config['file_name'] = date("Y_m_d") . $this->input->post('no_induk');
        $config['overwrite'] = TRUE;
        $config['file_ext_tolower'] = TRUE;
        $config['detect_mime'] = TRUE;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('foto')) {
            $error = ['error' => $this->upload->display_errors()];
        }
        $upload = $this->upload->data();
        $data = [
            'no_induk' => $this->input->post('no_induk'),
            'nisn' => $this->input->post('nisn'),
            'nama_siswa' => $this->input->post('nama_siswa'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'agama' => $this->input->post('agama'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'alamat_siswa' => $this->input->post('alamat_siswa'),
            'status' => $this->input->post('status'),
            'foto' => base_url('Uploads/foto_siswa/' . $upload['file_name'])
        ];
        $this->M_datsis->input_data($data, 'data_siswa');
        redirect('Data_Siswa/index');
    }

    function hapus($id_siswa) {
        $where = ['id_siswa' => $id_siswa];
        $this->M_datsis->hapus_data($where, 'data_siswa');
        redirect('Sekolah/Data_Siswa/index');
    }

    function edit($id) {
        $data = [
            'title' => 'Ubah Data Siswa',
            'data_siswa' => $this->M_datsis->edit_data($id)
        ];
        $data['content'] = $this->load->view('v_edit', $data, true);
        $this->load->view('template', $data);
    }

    function Update() {
        $config['upload_path'] = './Uploads/foto_siswa/';
        $config['allowed_types'] = 'jpg|jpeg|png|xls|xlsx|doc|docx|pdf';
        $config['max_size'] = '1000';
        $config['file_name'] = date("Y_m_d") . $this->input->post('no_induk');
        $config['overwrite'] = true;
        $config['file_ext_tolower'] = true;
        $config['detect_mime'] = true;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('foto')) {
//            $error = ['error' => $this->upload->display_errors()];
            $this->upload->display_errors();
        } else {
            $upload = $this->upload->data();
            $data = [
                'no_induk' => $this->input->post('no_induk'),
                'nisn' => $this->input->post('nisn'),
                'nama_siswa' => $this->input->post('nama_siswa'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'agama' => $this->input->post('agama'),
                'nama_ibu' => $this->input->post('nama_ibu'),
                'alamat_siswa' => $this->input->post('alamat_siswa'),
                'status' => $this->input->post('status'),
                'foto' => base_url('Uploads/foto_siswa/' . $upload['file_name'])
            ];
            $exec = $this->M_datsis->update_data($data);
            if ($exec == true) {
                echo '<script>alert("data berhasil disimpan");window.location.href="' . base_url('Sekolah/Data_Siswa/index') . '";</script>';
            } else {
                echo '<script>alert("data gagal disimpan");window.location.href="' . base_url('Sekolah/Data_Siswa/index') . '";</script>';
            }
        }
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
            echo '<script>alert("Terjadi kesalahan, ulangi atau hubungi administrator !");window.location.href = "' . base_url('Dat_Siswa/index') . '";</script>';
        } else {
            $upload = $this->upload->data();
            $data = [
                'no_induk' => $this->input->post('no_induk'),
                'nisn' => $this->input->post('nisn'),
                'nama_siswa' => $this->input->post('nama_siswa'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'agama' => $this->input->post('agama'),
                'nama_ibu' => $this->input->post('nama_ibu'),
                'alamat_siswa' => $this->input->post('alamat_siswa'),
                'status' => $this->input->post('status'),
                'foto' => base_url('Uploads/' . $upload['file_name'] . ' '),
                'syscreateuser' => '1', //nanti diisi dengan session user
                'syscreatedate' => date("Y-m-d H:i:s")
            ];
            $this->M_datsis->Simpan($data);
        }
    }

    function Baca($id) {
        $data = [
            'title' => 'Detail Data Siswa',
            'value' => $this->M_datsis->Baca($id),
            'addclass' => ''
        ];
        $data['content'] = $this->load->view('V_Detail_datsis', $data, true);
        $this->load->view('template', $data);
    }

    function Cetak($id) {
        $value = $this->M_datsis->Baca($id);
        $this->load->library('ciqrcode');
        $config['cacheable'] = true; //boolean, the default is true
        $config['cachedir'] = './assets/'; //string, the default is application/cache/
        $config['errorlog'] = './assets/'; //string, the default is application/logs/
        $config['imagedir'] = './assets/qrcode/'; //direktori penyimpanan qr code
        $config['quality'] = true; //boolean, the default is true
        $config['size'] = '1024'; //interger, the default is 1024
        $config['black'] = [224, 255, 255]; // array, default is array(255,255,255)
        $config['white'] = [70, 130, 180]; // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);
        $image_name = 'qr_' . $value[0]->no_induk . '.png'; //buat name dari qr code sesuai dengan nim

        $params['data'] = $value[0]->no_induk; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH . $config['imagedir'] . $image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params);
        $dat = [
            'title' => 'Print Data Siswa',
            'value' => $value,
            'addclass' => 'hidden'
        ];
        $mpdf = new \Mpdf\Mpdf();
        $data = $this->load->view('Print_datsis', $dat, TRUE);
        $mpdf->WriteHTML($data);
        $mpdf->Output();
    }

    function dat_sis_total() {
        $data = ['title' => 'Administrator | Total Data Siswa | SIMANIS', 'value' => $this->M_datsis->rekap()];
        $data['content'] = $this->load->view('v_datsis_tot', $data, true);
        $this->load->view('template', $data);
    }

}
