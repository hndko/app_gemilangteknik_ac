<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BlogController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') != TRUE) {
            redirect('auth');
        }

        $this->load->model('BlogModel');
        $this->load->model('PenggunaModel');

        $this->data = ['account' => $this->PenggunaModel->ambilData($this->session->userdata['user_id'])];
    }

    public function index()
    {
        $this->data['title'] = 'Artikel | Gemilang Teknik AC';
        $this->data['pages'] = 'Artikel';
        $this->data['result'] = $this->BlogModel->ambilData();

        $this->load->view('panel/layout/head', $this->data);
        $this->load->view('panel/layout/navbar', $this->data);
        $this->load->view('panel/layout/sidebar', $this->data);
        $this->load->view('panel/blog/index', $this->data);
        $this->load->view('panel/layout/footer', $this->data);
        $this->load->view('panel/layout/javascript', $this->data);
    }

    public function create()
    {
        $this->form_validation->set_rules('slug', 'Slug', 'required');
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->data['title'] = 'Artikel | Gemilang Teknik AC';
            $this->data['pages'] = 'Artikel';

            $this->load->view('panel/layout/head', $this->data);
            $this->load->view('panel/layout/navbar', $this->data);
            $this->load->view('panel/layout/sidebar', $this->data);
            $this->load->view('panel/blog/create', $this->data);
            $this->load->view('panel/layout/footer', $this->data);
            $this->load->view('panel/layout/javascript', $this->data);
        } else {
            // config file_upload
            $config['upload_path'] = './assets/img/blog/'; // Direktori penyimpanan file
            $config['allowed_types'] = 'gif|jpg|png|jpeg'; // Jenis file yang diizinkan
            $config['max_size'] = 2048; // Ukuran maksimum file (dalam kilobita)
            $config['encrypt_name'] = TRUE; // Mengenkripsi nama file

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('sampul')) {
                // Jika upload gagal, tampilkan pesan error
                $error = $this->upload->display_errors();
                echo $error;
            } else {
                // Jika upload berhasil, ambil data file dan simpan ke database
                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];
                $file_size = $upload_data['file_size'];

                // Simpan data gambar ke dalam database
                $this->BlogModel->tambahData($file_name, $this->session->userdata['user_id']);
                $this->session->set_flashdata('success', true);
                $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Data anda telah tersimpan.');
                redirect('blog');
            }
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('slug', 'Slug', 'required');
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->data['title'] = 'Artikel | Gemilang Teknik AC';
            $this->data['pages'] = 'Artikel';
            $this->data['res'] = $this->BlogModel->ambilData($id);

            $this->load->view('panel/layout/head', $this->data);
            $this->load->view('panel/layout/navbar', $this->data);
            $this->load->view('panel/layout/sidebar', $this->data);
            $this->load->view('panel/blog/edit', $this->data);
            $this->load->view('panel/layout/footer', $this->data);
            $this->load->view('panel/layout/javascript', $this->data);
        } else {
            $sampul_old = $this->input->post('sampul_old');

            if (!empty($_FILES['sampul']['name'])) {
                // config file_upload
                $config['upload_path'] = './assets/img/blog/'; // Direktori penyimpanan file
                $config['allowed_types'] = 'gif|jpg|png|jpeg'; // Jenis file yang diizinkan
                $config['max_size'] = 2048; // Ukuran maksimum file (dalam kilobita)
                $config['encrypt_name'] = TRUE; // Mengenkripsi nama file

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('sampul')) {
                    // Jika upload gagal, tampilkan pesan error
                    $error = $this->upload->display_errors();
                    echo $error;
                } else {
                    // Jika upload berhasil, ambil data file dan simpan ke database
                    $upload_data = $this->upload->data();
                    $file_name = $upload_data['file_name'];
                    $image_path = $config['upload_path'] . $sampulOld;
                    if (file_exists($image_path)) {
                        unlink($image_path);
                    }

                    // Simpan data gambar ke dalam database
                    $this->BlogModel->ubahData($id, $file_name);
                    $this->session->set_flashdata('success', true);
                    $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Data anda telah diperbaharui.');
                    redirect('blog');
                }
            } else {
                $config['upload_path'] = './assets/img/blog/';
                $file_name = $sampulOld;

                // Simpan data gambar ke dalam database
                $this->BlogModel->ubahData($id, $file_name);
                $this->session->set_flashdata('success', true);
                $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Data anda telah diperbaharui.');
                redirect('blog');
            }
        }
    }

    public function delete($id)
    {
        $result = $this->BlogModel->ambilData($id);
        $config['upload_path'] = './assets/img/blog/';
        $image_path = $config['upload_path'] . $result->sampul;
        if (file_exists($image_path)) {
            unlink($image_path);
        }

        $this->BlogModel->deleteData($id);
        $this->session->set_flashdata('success', true);
        $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Data anda telah dihapuskan.');
        redirect('blog');
    }

    public function is_active($id)
    {
        $this->BlogModel->is_active($id);
        $this->session->set_flashdata('success', true);
        $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Status akun anda telah diperbaharui.');
        redirect('blog');
    }
}
