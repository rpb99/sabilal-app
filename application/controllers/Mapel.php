<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller {
public function __construct()
{
    parent::__construct();
    $this->load->model('Mapel_model');
}
    public function list_mapel()
	{
        $this->load->model('Mapel_model');
        $data['mapel'] = $this->Mapel_model->getAllMapel();
        if($this->input->post('keyword')){
            $data['mapel'] = $this->Mapel_model->cariDataMapel();
        }
        $this->load->view('admin/_partials/head');
        $this->load->view('admin/_partials/navbar');
        $this->load->view('admin/_partials/sidebar');
        $this->load->view('admin/mapel/mapel', $data);
        $this->load->view('admin/_partials/footer');
    }


    public function tambah()
    {
        $this->form_validation->set_rules('kd_mapel', 'Kode Mapel', 'required');
        $this->form_validation->set_rules('nm_mapel', 'Nama mapel', 'required');
        $this->form_validation->set_rules('sesi_waktu', 'Sesi Waktu', 'required');
        $this->form_validation->set_rules('hari', 'Hari', 'required');
        $this->form_validation->set_rules('jam', 'Jam', 'required');


        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('admin/_partials/head');
            $this->load->view('admin/_partials/navbar');
            $this->load->view('admin/_partials/sidebar');
            $this->load->view('admin/mapel/tambah');
            $this->load->view('admin/_partials/footer');
        
    } else {
        $this->Mapel_model->tambahDataMapel();
        $this->session->set_flashdata('flash', ' Ditambahkan ');
        redirect('Mapel/list_mapel');
    }
}

public function hapus($kd_mapel)
{
    $this->Mapel_model->hapusDataMapel($kd_mapel);
    $this->session->set_flashdata('flash', ' Dihapus ');
    redirect('Mapel/list_mapel');
}

public function ubah($kd_mapel)
{
    $data['mapel'] = $this->Mapel_model->getMapelByKdMapel($kd_mapel);

        $this->form_validation->set_rules('kd_mapel', 'Kode Mapel', 'required');
        $this->form_validation->set_rules('nm_mapel', 'Nama mapel', 'required');
        $this->form_validation->set_rules('sesi_waktu', 'Sesi Waktu', 'required');
        $this->form_validation->set_rules('hari', 'Hari', 'required');
        $this->form_validation->set_rules('jam', 'Jam', 'required');

    if( $this->form_validation->run() == FALSE ) {
        $this->load->view('admin/_partials/head');
        $this->load->view('admin/_partials/navbar');
        $this->load->view('admin/_partials/sidebar');
        $this->load->view('admin/mapel/ubah', $data);
        $this->load->view('admin/_partials/footer');
    
} else {
    $this->Mapel_model->ubahDataMapel();
    $this->session->set_flashdata('flash', ' Diubah ');
    redirect('Mapel/list_mapel');
}
}


}
