<?php


class Nilai_model extends CI_model {

    public function getSiswaByNis($nis)
    {
        return $this->db->get_where('raport', ['nis' => $nis])->row_array();

    }

    public function getAllNilai()
    {
       return $this->db->get('nilai')->result_array();
    }

    public function getNilaiById($id)
    {
        return $this->db->get_where('nilai', ['nilai_id' => $id])->row_array();
 
    }


    public function raport($nis)
    {
        // return $this->db->get_where('data_raport', ['nis' => $nis])->row_array();
        $query = "SELECT * FROM raport WHERE nis=$nis";
        return mysqli_fetch_assoc($query);
    }

    public function account($nis)
{
    $query = $this->db->where(array('nis' => $nis))->limit(1)->get('raport');

    if($query->num_rows())
        return $query->row();
    else
        return FALSE;
}


    public function raport_detail($nis)
    {
        return $this->db->get_where('raport_detail', ['nis' => $nis])->row_array();
}


    public function tambahDataNilai()
    {
        $data = [
            "nis" => $this->input->post('nis', true),
            "kelas" => $this->input->post('kelas', true),
            "nip" => $this->input->post('nip', true),
            "kd_mapel" => $this->input->post('kd_mapel', true),
            "nilai_harian" => $this->input->post('harian', true),
            "nilai_uts" => $this->input->post('uts', true),
            "nilai_uas" => $this->input->post('uas', true),
            "ijin" => $this->input->post('ijin', true),
            "sakit" => $this->input->post('sakit', true),
            "tidak_hadir" => $this->input->post('tidak_hadir', true),
            "semester" => $this->input->post('semester', true),
            "tahun_ajaran" => $this->input->post('thn_ajaran', true)
        ];

        $this->db->insert('nilai', $data);
    }

    public function hapusDatanilai($id)
{
    $this->db->delete('nilai', ['nilai_id' => $id]);
    }

    // public function getnilaiById($id)
    // {
    //     return $this->db->get_where('nilai', ['id' => $id])->row_array();
    // }

    public function ubahDataNilai()
    {
        $data = [
            "nilai_id" => $this->input->post('nilai_id', true),
            "nis" => $this->input->post('nis', true),
            "kelas" => $this->input->post('kelas', true),
            "kd_mapel" => $this->input->post('kd_mapel', true),
            "nip" => $this->input->post('nip', true),
            "nilai_harian" => $this->input->post('nilai_harian', true),
            "nilai_uts" => $this->input->post('nilai_uts', true),
            "nilai_uas" => $this->input->post('nilai_uas', true),
            "ijin" => $this->input->post('ijin', true),
            "sakit" => $this->input->post('sakit', true),
            "tidak_hadir" => $this->input->post('tidak_hadir', true),
            "semester" => $this->input->post('semester', true),
            "tahun_ajaran" => $this->input->post('tahun_ajaran', true)
        ];

        $this->db->where('nilai_id', $this->input->post('nilai_id'));
        $this->db->update('nilai', $data);
    }

    public function cariDatanilai()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nis', $keyword);
        $this->db->or_like('kelas', $keyword);
        $this->db->or_like('kd_mapel', $keyword);
        $this->db->or_like('nip', $keyword);
        $this->db->or_like('nilai_harian', $keyword);
        $this->db->or_like('nilai_uts', $keyword);
        $this->db->or_like('nilai_uas', $keyword);
        $this->db->or_like('semester', $keyword);
        $this->db->or_like('tahun_ajaran', $keyword);
        return $this->db->get('nilai')->result_array();
    }

}

  