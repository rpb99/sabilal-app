<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {
public function __construct()
{
    parent::__construct();
    $this->load->model('Guru_model');
}
    public function list_guru()
	{
        $this->load->model('Guru_model');
        $data['guru'] = $this->Guru_model->getAllGuru();
        if($this->input->post('keyword')){
            $data['guru'] = $this->Guru_model->cariDataGuru();
        }
        $this->load->view('admin/_partials/head');
        $this->load->view('admin/_partials/navbar');
        $this->load->view('admin/_partials/sidebar');
        $this->load->view('admin/guru/guru', $data);
        $this->load->view('admin/_partials/footer');
    }


    public function tambah()
    {
        $this->form_validation->set_rules('nip', 'NIP', 'required|numeric');
        $this->form_validation->set_rules('nm_guru', 'Nama Guru', 'required');
        $this->form_validation->set_rules('tmpt_lhr', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lhr', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('hp', 'No HP', 'required|numeric');
        $this->form_validation->set_rules('jkel', 'Jenis Kelamin', 'required');


        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('admin/_partials/head');
            $this->load->view('admin/_partials/navbar');
            $this->load->view('admin/_partials/sidebar');
            $this->load->view('admin/guru/tambah');
            $this->load->view('admin/_partials/footer');
        
    } else {
        $this->Guru_model->tambahDataGuru();
        $this->session->set_flashdata('flash', ' Ditambahkan ');
        redirect('Guru/list_guru');
    }
}

public function hapus($id)
{
    $this->Guru_model->hapusDataGuru($id);
    $this->session->set_flashdata('flash', ' Dihapus ');
    redirect('Guru/list_guru');
}

public function ubah($nip)
{
    $data['guru'] = $this->Guru_model->getGuruByNip($nip);
    $data['jenis_kelamin'] = ['Laki-laki','Perempuan'];

    $this->form_validation->set_rules('nip', 'NIP', 'required|numeric');
    $this->form_validation->set_rules('nm_guru', 'Nama Guru', 'required');
    $this->form_validation->set_rules('tmpt_lhr', 'Tempat Lahir', 'required');
    $this->form_validation->set_rules('tgl_lhr', 'Tanggal Lahir', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('hp', 'No HP', 'required|numeric');
    $this->form_validation->set_rules('jkel', 'Jenis Kelamin', 'required');


    if( $this->form_validation->run() == FALSE ) {
        $this->load->view('admin/_partials/head');
        $this->load->view('admin/_partials/navbar');
        $this->load->view('admin/_partials/sidebar');
        $this->load->view('admin/guru/ubah', $data);
        $this->load->view('admin/_partials/footer');
    
} else {
    $this->Guru_model->ubahDataGuru();
    $this->session->set_flashdata('flash', ' Diubah ');
    redirect('Guru/list_guru');
}
}


}
