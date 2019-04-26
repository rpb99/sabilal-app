<?php


class Siswa_model extends CI_model {

    public function getAllSiswa()
    {
       return $this->db->get('siswa')->result_array();
    }

    public function tambahDataSiswa()
    {
        $data = [
            "nis" => $this->input->post('nis', true),
            "nm_siswa" => $this->input->post('nm_siswa', true),
            "tmpt_lhr" => $this->input->post('tmpt_lhr', true),
            "tgl_lhr" => $this->input->post('tgl_lhr', true),
            "alamat" => $this->input->post('alamat', true),
            "jkel" => $this->input->post('jkel', true)
        ];

        $this->db->insert('siswa', $data);
    }

    public function hapusDataSiswa($nis)
{
    $this->db->delete('siswa', ['nis' => $nis]);
    }

    public function getSiswaByNis($nis)
    {
        return $this->db->get_where('siswa', ['nis' => $nis])->row_array();
    }

    public function ubahDataSiswa()
    {
        $data = [
            "nis" => $this->input->post('nis', true),
            "nm_siswa" => $this->input->post('nm_siswa', true),
            "tmpt_lhr" => $this->input->post('tmpt_lhr', true),
            "tgl_lhr" => $this->input->post('tgl_lhr', true),
            "alamat" => $this->input->post('alamat', true),
            "jkel" => $this->input->post('jkel', true)
        ];

        $this->db->where('nis', $this->input->post('nis'));
        $this->db->update('siswa', $data);
    }

    public function cariDataSiswa()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nm_siswa', $keyword);
        $this->db->or_like('tmpt_lhr', $keyword);
        $this->db->or_like('tgl_lhr', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('jkel', $keyword);
        $this->db->or_like('nis', $keyword);
        return $this->db->get('siswa')->result_array();
    }

}

