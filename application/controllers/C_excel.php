<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class C_excel extends CI_Controller {
 
      //constructor class C_excel
      public function __construct() {
           parent::__construct();
           //load helper url
           $this->load->helper('url');
           //load model 'model_buku'
           $this->load->model('Model_raport');
      }
 
      //halaman awal untuk menampilkan tabel
      public function index($nis) {
        $data = array( 'title' => 'Laporan Excel | Tutorial Export ke excel CodeIgniter @ https://recodeku.blogspot.com',
        'buku' => $this->Model_raport->getAll($nis));
           $data['person'] = $this->Model_raport->getAllRow($nis);
           $data['detail'] = $this->Model_raport->raport_detail($nis);
 
           $this->load->view('vw_excel',$data);
      }
 
      //export ke dalam format excel
      public function export_excel($nis){
        $data = array( 'title' => 'Laporan Excel | Tutorial Export ke excel CodeIgniter @ https://recodeku.blogspot.com',
        'buku' => $this->Model_raport->getAll($nis));
        $data['person'] = $this->Model_raport->getAllRow($nis);
        $data['detail'] = $this->Model_raport->raport_detail($nis);
 
           $this->load->view('vw_laporan_excel',$data);
      }
 
 }