<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
public function __construct()
{
    parent::__construct();
    $this->load->model('Siswa_model');
}
    public function list_siswa()
	{
        $this->load->model('Siswa_model');
        $data['siswa'] = $this->Siswa_model->getAllSiswa();
        if($this->input->post('keyword')){
            $data['siswa'] = $this->Siswa_model->cariDataSiswa();
        }
        $this->load->view('admin/_partials/head');
        $this->load->view('admin/_partials/navbar');
        $this->load->view('admin/_partials/sidebar');
        $this->load->view('admin/siswa/siswa', $data);
        $this->load->view('admin/_partials/footer');
    }


    public function tambah()
    {
        $this->form_validation->set_rules('nis', 'NIS', 'required|numeric');
        $this->form_validation->set_rules('nm_siswa', 'Nama Siswa', 'required');
        $this->form_validation->set_rules('tmpt_lhr', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lhr', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('jkel', 'Jenis Kelamin', 'required');


        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('admin/_partials/head');
            $this->load->view('admin/_partials/navbar');
            $this->load->view('admin/_partials/sidebar');
            $this->load->view('admin/siswa/tambah');
            $this->load->view('admin/_partials/footer');
        
    } else {
        $this->Siswa_model->tambahDataSiswa();
        $this->session->set_flashdata('flash', ' Ditambahkan ');
        redirect('Siswa/list_siswa');
    }
}

public function hapus($nis)
{
    $this->Siswa_model->hapusDataSiswa($nis);
    $this->session->set_flashdata('flash', ' Dihapus ');
    redirect('Siswa/list_siswa');
}

public function ubah($nis)
{
    $data['siswa'] = $this->Siswa_model->getSiswaByNis($nis);
    $data['jenis_kelamin'] = ['Laki-laki','Perempuan'];

    $this->form_validation->set_rules('nis', 'NIS', 'required|numeric');
    $this->form_validation->set_rules('nm_siswa', 'Nama Siswa', 'required');
    $this->form_validation->set_rules('tmpt_lhr', 'Tempat Lahir', 'required');
    $this->form_validation->set_rules('tgl_lhr', 'Tanggal Lahir', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('jkel', 'Jenis Kelamin', 'required');


    if( $this->form_validation->run() == FALSE ) {
        $this->load->view('admin/_partials/head');
        $this->load->view('admin/_partials/navbar');
        $this->load->view('admin/_partials/sidebar');
        $this->load->view('admin/siswa/ubah', $data);
        $this->load->view('admin/_partials/footer');
    
} else {
    $this->Siswa_model->ubahDataSiswa();
    $this->session->set_flashdata('flash', ' Diubah ');
    redirect('Siswa/list_siswa');
}
}


}
