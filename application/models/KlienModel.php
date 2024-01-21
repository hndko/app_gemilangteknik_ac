<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KlienModel extends CI_Model
{
    public function showHome()
    {

        return $this->db->get_where('tb_klien', ['is_active' => '1'])->result();
    }

    public function ambilData($id = false)
    {
        if ($id == false) {
            return $this->db->get('tb_klien')->result();
        }

        return $this->db->get_where('tb_klien', ['klien_id' => $id])->row();
    }

    public function tambahData($file_name)
    {
        date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');

        $data = [
            'sampul' => $file_name,
            'judul' => htmlspecialchars($this->input->post('judul')),
            'created_at' => $now
        ];

        $this->db->insert('tb_klien', $data);
    }

    public function ubahData($id, $file_name)
    {
        $data = [
            'sampul' => $file_name,
            'judul' => htmlspecialchars($this->input->post('judul')),
        ];

        $this->db->update('tb_klien', $data, ['klien_id' => $id]);
    }

    public function deleteData($id)
    {
        $this->db->delete('tb_klien', ['klien_id' => $id]);
    }

    public function is_active($id)
    {
        $data = [
            'is_active' => htmlspecialchars($this->input->post('is_active'))
        ];

        $this->db->update('tb_klien', $data, ['klien_id' => $id]);
    }
}
