<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LayananModel extends CI_Model
{
    public function showHome()
    {
        return $this->db->get_where('tb_layanan', ['is_active' => '1'])->result();
    }

    public function ambilData($id = false)
    {
        if ($id == false) {
            return $this->db->get('tb_layanan')->result();
        }

        return $this->db->get_where('tb_layanan', ['layanan_id' => $id])->row();
    }

    public function tambahData()
    {
        $data = [
            'judul' => htmlspecialchars($this->input->post('judul')),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi')),
        ];

        $this->db->insert('tb_layanan', $data);
    }

    public function ubahData($id)
    {
        $data = [
            'judul' => htmlspecialchars($this->input->post('judul')),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi')),
        ];

        $this->db->update('tb_layanan', $data, ['layanan_id' => $id]);
    }

    public function deleteData($id)
    {
        $this->db->delete('tb_layanan', ['layanan_id' => $id]);
    }

    public function is_active($id)
    {
        $data = [
            'is_active' => htmlspecialchars($this->input->post('is_active'))
        ];

        $this->db->update('tb_layanan', $data, ['layanan_id' => $id]);
    }
}
