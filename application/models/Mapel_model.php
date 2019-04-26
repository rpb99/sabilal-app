<?php


class Mapel_model extends CI_model {

    public function getAllMapel()
    {
       return $this->db->get('mapel')->result_array();
    }

    public function tambahDataMapel()
    {
        $data = [
            "kd_mapel" => $this->input->post('kd_mapel', true),
            "nm_mapel" => $this->input->post('nm_mapel', true),
            "sesi_waktu" => $this->input->post('sesi_waktu', true),
            "hari" => $this->input->post('hari', true),
            "jam" => $this->input->post('jam', true),
            "ruangan" => $this->input->post('ruangan', true)
        ];

        $this->db->insert('mapel', $data);
    }

    public function hapusDataMapel($kd_mapel)
{
    $this->db->delete('mapel', ['kd_mapel' => $kd_mapel]);
    }

    public function getMapelByKdMapel($kd_mapel)
    {
        return $this->db->get_where('mapel', ['kd_mapel' => $kd_mapel])->row_array();
    }

    public function ubahDataMapel()
    {
        $data = [
            "kd_mapel" => $this->input->post('kd_mapel', true),
            "nm_mapel" => $this->input->post('nm_mapel', true),
            "sesi_waktu" => $this->input->post('sesi_waktu', true),
            "hari" => $this->input->post('hari', true),
            "jam" => $this->input->post('jam', true),
            "ruangan" => $this->input->post('ruangan', true)
        ];

        $this->db->where('kd_mapel', $this->input->post('kd_mapel'));
        $this->db->update('mapel', $data);
    }

    public function cariDataMapel()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nm_mapel', $keyword);
        $this->db->or_like('ruangan', $keyword);
        $this->db->or_like('sesi_waktu', $keyword);
        $this->db->or_like('hari', $keyword);
        $this->db->or_like('jam', $keyword);
        $this->db->or_like('kd_mapel', $keyword);
        return $this->db->get('mapel')->result_array();
    }

}

