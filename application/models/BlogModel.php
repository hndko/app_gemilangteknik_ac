<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BlogModel extends CI_Model
{
    public function searchArticles($keyword)
    {
        $this->db->select('tb_artikel.*, tb_users.nama_lengkap');
        $this->db->from('tb_artikel');
        $this->db->join('tb_users', 'tb_users.user_id = tb_artikel.user_id', 'left');
        $this->db->like('tb_artikel.judul', $keyword);
        $this->db->or_like('tb_artikel.deskripsi', $keyword);
        $this->db->where('tb_artikel.is_active', '1');

        return $this->db->get()->result();
    }


    public function updateCountView($article_id)
    {
        $this->db->set('count_view', 'count_view + 1', FALSE);
        $this->db->where('artikel_id', $article_id);
        $this->db->update('tb_artikel');
    }

    public function countArtikel()
    {
        return $this->db->where('is_active', '1')->get('tb_artikel')->num_rows();
    }

    public function getArtikelPage($limit, $page)
    {
        $this->db->select('tb_artikel.*, tb_users.nama_lengkap');
        $this->db->from('tb_artikel');
        $this->db->join('tb_users', 'tb_users.user_id = tb_artikel.user_id', 'left');
        $this->db->where('tb_artikel.is_active', '1');
        $this->db->order_by('tb_artikel.created_at', 'DESC');
        $this->db->limit($limit, $page);

        return $this->db->get()->result();
    }

    public function showHome($id = false)
    {
        $this->db->select('tb_artikel.*, tb_users.nama_lengkap');
        $this->db->from('tb_artikel');
        $this->db->join('tb_users', 'tb_users.user_id = tb_artikel.user_id', 'left');
        $this->db->where('tb_artikel.is_active', '1');
        $this->db->order_by('tb_artikel.created_at', 'DESC');

        if ($id !== false) {
            $this->db->where('tb_artikel.slug', $id);
            return $this->db->get()->row();
        } else {
            return $this->db->get()->result();
        }
    }

    public function showPopulerPost($id = false)
    {
        $this->db->select('tb_artikel.*, tb_users.nama_lengkap');
        $this->db->from('tb_artikel');
        $this->db->join('tb_users', 'tb_users.user_id = tb_artikel.user_id', 'left');
        $this->db->where('tb_artikel.is_active', '1');
        $this->db->order_by('tb_artikel.count_view', 'ASC');
        $this->db->limit(6);

        if ($id !== false) {
            $this->db->where('tb_artikel.slug', $id);
            return $this->db->get()->row();
        } else {
            return $this->db->get()->result();
        }
    }

    public function ambilData($id = false)
    {
        $this->db->select('tb_artikel.*, tb_users.nama_lengkap');
        $this->db->from('tb_artikel');
        $this->db->join('tb_users', 'tb_users.user_id = tb_artikel.user_id', 'left');
        $this->db->order_by('tb_artikel.created_at', 'DESC');

        if ($id !== false) {
            $this->db->where('tb_artikel.artikel_id', $id);
            return $this->db->get()->row();
        } else {
            return $this->db->get()->result();
        }
    }

    public function tambahData($file_name)
    {
        date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
        $now = date('Y-m-d H:i:s');

        $data = [
            'slug' => htmlspecialchars($this->input->post('slug')),
            'judul' => htmlspecialchars($this->input->post('judul')),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi')),
            'sampul' => $file_name,
            'created_at' => $now
        ];

        $this->db->insert('tb_artikel', $data);
    }

    public function ubahData($id, $file_name)
    {
        $data = [
            'slug' => htmlspecialchars($this->input->post('slug')),
            'judul' => htmlspecialchars($this->input->post('judul')),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi')),
            'sampul' => $file_name
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
