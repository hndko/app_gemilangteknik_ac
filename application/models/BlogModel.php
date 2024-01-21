<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BlogModel extends CI_Model
{
    public function showHome()
    {

        return $this->db->get_where('tb_artikel', ['is_active' => '1'])->result();
    }

    public function ambilData($id = false)
    {
        if ($id == false) {
            return $this->db->get('tb_artikel')->result();
        }

        return $this->db->get_where('tb_artikel', ['artikel_id' => $id])->row();
    }

    public function tambahData($file_name)
    {
        date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');

        $data = [
            'sampul' => $file_name,
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi')),
            'created_at' => $now
        ];

        $this->db->insert('tb_artikel', $data);
    }

    public function ubahData($id, $file_name)
    {
        $data = [
            'sampul' => $file_name,
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi')),
        ];

        $this->db->update('tb_artikel', $data, ['artikel_id' => $id]);
    }

    public function deleteData($id)
    {
        $this->db->delete('tb_artikel', ['artikel_id' => $id]);
    }

    public function is_active($id)
    {
        $data = [
            'is_active' => htmlspecialchars($this->input->post('is_active'))
        ];

        $this->db->update('tb_artikel', $data, ['artikel_id' => $id]);
    }
}
