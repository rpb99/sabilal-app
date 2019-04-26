<?php


class Guru_model extends CI_model {

    public function getAllGuru()
    {
       return $this->db->get('guru')->result_array();
    }

    public function tambahDataGuru()
    {
        $data = [
            "nip" => $this->input->post('nip', true),
            "nm_guru" => $this->input->post('nm_guru', true),
            "tmpt_lhr" => $this->input->post('tmpt_lhr', true),
            "tgl_lhr" => $this->input->post('tgl_lhr', true),
            "alamat" => $this->input->post('alamat', true),
            "hp" => $this->input->post('hp', true),
            "jkel" => $this->input->post('jkel', true)
        ];

        $this->db->insert('guru', $data);
    }

    public function hapusDataGuru($nip)
{
    $this->db->delete('guru', ['nip' => $nip]);
    }

    public function getGuruByNip($nip)
    {
        return $this->db->get_where('guru', ['nip' => $nip])->row_array();
    }

    public function ubahDataGuru()
    {
        $data = [
            "nip" => $this->input->post('nip', true),
            "nm_guru" => $this->input->post('nm_guru', true),
            "tmpt_lhr" => $this->input->post('tmpt_lhr', true),
            "tgl_lhr" => $this->input->post('tgl_lhr', true),
            "alamat" => $this->input->post('alamat', true),
            "hp" => $this->input->post('hp', true),
            "jkel" => $this->input->post('jkel', true)
        ];

        $this->db->where('nip', $this->input->post('nip'));
        $this->db->update('guru', $data);
    }

    public function cariDataGuru()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nm_guru', $keyword);
        $this->db->or_like('tmpt_lhr', $keyword);
        $this->db->or_like('tgl_lhr', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('jkel', $keyword);
        $this->db->or_like('nip', $keyword);
        $this->db->or_like('hp', $keyword);
        return $this->db->get('guru')->result_array();
    }

}

