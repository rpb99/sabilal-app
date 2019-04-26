<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Model_raport extends CI_Model {
 
      //constructor untuk class Model_buku
      public function __construct(){
           //load constructor CI_Model
           parent::__construct();
 
           //load database
           $this->load->database();
      }
 
      // ambil data dari tabel 'tbl_buku'
      public function getAll($nis) {
        return $this->db->get_where('raport', ['nis' => $nis])->result_array();
      }

      public function getAllRow($nis) {
        return $this->db->get_where('raport', ['nis' => $nis])->row_array();
      }

      public function raport_detail($nis)
      {
          return $this->db->get_where('raport_detail', ['nis' => $nis])->row_array();
  }

 
 }