<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Siswa_model');
        $this->load->model('Nilai_model');
    }
	public function index()
	{
        $data['kelas'] = [
            "I", "II", "III", "IV", "V", "VI"
        ];
        $data['siswa'] = $this->Siswa_model->getSiswaByNis($nis);
        $data['nilai'] = $this->Nilai_model->getAllNilai();

        $this->load->view('laporan/dompdf', $data);
        $this->load->library('mypdf');
        $this->mypdf->generate('Laporan/dompdf', $data, 'laporan-siswa', 'A4', 'landscape');
    }

    public function account($id)
    {
   
    }

    public function cetak($nis)
{

    $data['siswa'] = $this->Siswa_model->getSiswaByNis($nis);
    $data['nilai'] = $this->Nilai_model->getSiswaByNis($nis);
    $data['lapor'] = $this->Nilai_model->raport($nis);
    $data['detail'] = $this->Nilai_model->raport_detail($nis);

 
    if( $this->form_validation->run() == FALSE ) {
        $this->load->library('mypdf');
        

        $this->mypdf->generate('Laporan/dompdf', $data, 'laporan-siswa', 'A4', 'landscape');
        }
}

}
