<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {
public function __construct()
{
    parent::__construct();
    $this->load->model('Nilai_model');
    $this->load->model('Siswa_model');
    $this->load->model('Mapel_model');
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
        $this->load->view('admin/_partials/sidebar_guru');
        $this->load->view('admin/nilai/siswa', $data);
        $this->load->view('admin/_partials/footer');
    }

    public function list_nilai()
	{
        $this->load->model('Nilai_model');
        $data['nilai'] = $this->Nilai_model->getAllNilai();
        if($this->input->post('keyword')){
        $data['nilai'] = $this->Nilai_model->cariDataNilai();
        }
        $this->load->view('admin/_partials/head');
        $this->load->view('admin/_partials/navbar');
        $this->load->view('admin/_partials/sidebar_guru');
        $this->load->view('admin/nilai/nilai', $data);
        $this->load->view('admin/_partials/footer');
    }

    public function nilai()
	{
        $this->load->model('Nilai_model');
        $data['nilai'] = $this->Nilai_model->getAllNilai();
        if($this->input->post('keyword')){
            $data['nilai'] = $this->Nilai_model->cariDataNilai();
        }
        $this->load->view('admin/_partials/head');
        $this->load->view('admin/_partials/navbar');
        $this->load->view('admin/_partials/sidebar');
        $this->load->view('admin/nilai/nilai_beri', $data);
        $this->load->view('admin/_partials/footer');
    }

    public function hapus($id)
    {
        $this->Nilai_model->hapusDataNilai($id);
        $this->session->set_flashdata('flash', ' Dihapus ');
        redirect('Nilai/nilai');
    }

    public function inputNilai($nis)
    {
        $data['siswa'] = $this->Siswa_model->getSiswaByNis($nis);
        $data['kelas'] = ['I','II','III','IV','V','VI'];
        $data['semester'] = ["Ganjil","Genap"];
        $data['thn_ajaran'] = ['2018/2019','2019/2020'];
        $this->form_validation->set_rules('nis', 'NIS', 'required|numeric');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');

        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('admin/_partials/head');
            $this->load->view('admin/_partials/navbar');
            $this->load->view('admin/_partials/sidebar_guru');
            $this->load->view('admin/nilai/tambah', $data);
            $this->load->view('admin/_partials/footer');
        
        } else {
            $this->Nilai_model->tambahDataNilai();
            $this->session->set_flashdata('flash', ' Ditambah ');
            redirect('Nilai/list_nilai');
        }
    }

    public function ubah($id)
    {
        $data['nilai'] = $this->Nilai_model->getNilaiById($id);
        $data['mapel'] = $this->Mapel_model->getAllMapel();
        $data['kelas'] = ['I','II','III','IV','V','VI'];
        $data['semester'] = ["Ganjil","Genap"];
        $data['thn_ajaran'] = ['2018/2019','2019/2020'];

            $this->form_validation->set_rules('nilai_id', 'nilai_id', 'required|numeric');
            $this->form_validation->set_rules('nis', 'NIS', 'required|numeric');
            $this->form_validation->set_rules('kelas', 'Kelas', 'required');
            $this->form_validation->set_rules('kd_mapel', 'Kode Mapel', 'required');
            $this->form_validation->set_rules('nip', 'NIP', 'required|numeric');
            $this->form_validation->set_rules('nilai_harian', 'Nilai Harian', 'required|numeric');
            $this->form_validation->set_rules('nilai_uts', 'Nilai UTS', 'required|numeric');
            $this->form_validation->set_rules('nilai_uas', 'Nilai UAS', 'required|numeric');
            $this->form_validation->set_rules('ijin', 'Ijin', 'required');
            $this->form_validation->set_rules('sakit', 'Sakit', 'required');
            $this->form_validation->set_rules('tidak_hadir', 'Tidak Hadir', 'required');
            $this->form_validation->set_rules('semester', 'Semester', 'required');
            $this->form_validation->set_rules('tahun_ajaran', 'Tahun Ajaran', 'required');

        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('admin/_partials/head');
            $this->load->view('admin/_partials/navbar');
            $this->load->view('admin/_partials/sidebar');
            $this->load->view('admin/nilai/ubah', $data);
            $this->load->view('admin/_partials/footer');
        
        } else {
            $this->Nilai_model->ubahDataNilai();
            $this->session->set_flashdata('flash', ' Diubah ');
            redirect('Nilai/nilai');
        }
    }
}
