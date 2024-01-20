<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PenggunaModel extends CI_Model
{
    public function ambilData($id = false)
    {
        if ($id == false) {
            return $this->db->get('tb_users')->result();
        }

        return $this->db->get_where('tb_users', ['user_id' => $id])->row();
    }

    public function tambahData($file_name)
    {
        $data = [
            'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap')),
            'email' => htmlspecialchars($this->input->post('email')),
            'username' => htmlspecialchars($this->input->post('username')),
            'password' => password_hash(htmlspecialchars($this->input->post('password')), PASSWORD_DEFAULT),
            'sampul' => $file_name,
            'role' => htmlspecialchars($this->input->post('role'))
        ];

        $this->db->insert('tb_users', $data);
    }

    public function ubahData($id, $file_name)
    {
        $data = [
            'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap')),
            'email' => htmlspecialchars($this->input->post('email')),
            'username' => htmlspecialchars($this->input->post('username')),
            'sampul' => $file_name,
            'role' => htmlspecialchars($this->input->post('role'))
        ];

        $this->db->update('tb_users', $data, ['user_id' => $id]);
    }

    public function deleteData($id)
    {
        $this->db->delete('tb_users', ['user_id' => $id]);
    }

    public function is_active($id)
    {
        $data = [
            'is_active' => htmlspecialchars($this->input->post('is_active'))
        ];

        $this->db->update('tb_users', $data, ['user_id' => $id]);
    }
}
