<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DokumentasiController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('DokumentasiModel');

        $this->data = [];
    }

    public function index()
    {
        $this->data['title'] = 'Dokumentasi | Gemilang Teknik AC';
        $this->data['pages'] = 'Dokumentasi';
        $this->data['result'] = $this->DokumentasiModel->ambilData();

        $this->load->view('panel/layout/head', $this->data);
        $this->load->view('panel/layout/navbar', $this->data);
        $this->load->view('panel/layout/sidebar', $this->data);
        $this->load->view('panel/dokumentasi/index', $this->data);
        $this->load->view('panel/layout/footer', $this->data);
        $this->load->view('panel/layout/javascript', $this->data);
    }

    public function create()
    {
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->data['title'] = 'Dokumentasi | Gemilang Teknik AC';
            $this->data['pages'] = 'Dokumentasi';

            $this->load->view('panel/layout/head', $this->data);
            $this->load->view('panel/layout/navbar', $this->data);
            $this->load->view('panel/layout/sidebar', $this->data);
            $this->load->view('panel/dokumentasi/create', $this->data);
            $this->load->view('panel/layout/footer', $this->data);
            $this->load->view('panel/layout/javascript', $this->data);
        } else {
            // config file_upload
            $config['upload_path'] = './assets/img/dokumentasi/'; // Direktori penyimpanan file
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
                $this->DokumentasiModel->tambahData($file_name);
                $this->session->set_flashdata('success', true);
                $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Data anda telah tersimpan.');
                redirect('dokumentasi');
            }
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->data['title'] = 'Dokumentasi | Gemilang Teknik AC';
            $this->data['pages'] = 'Dokumentasi';
            $this->data['res'] = $this->DokumentasiModel->ambilData($id);

            $this->load->view('panel/layout/head', $this->data);
            $this->load->view('panel/layout/navbar', $this->data);
            $this->load->view('panel/layout/sidebar', $this->data);
            $this->load->view('panel/dokumentasi/edit', $this->data);
            $this->load->view('panel/layout/footer', $this->data);
            $this->load->view('panel/layout/javascript', $this->data);
        } else {
            $sampul_old = $this->input->post('sampul_old');

            if (!empty($_FILES['sampul']['name'])) {
                // config file_upload
                $config['upload_path'] = './assets/img/dokumentasi/'; // Direktori penyimpanan file
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
                    $this->DokumentasiModel->ubahData($id, $file_name);
                    $this->session->set_flashdata('success', true);
                    $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Data anda telah diperbaharui.');
                    redirect('dokumentasi');
                }
            } else {
                $config['upload_path'] = './assets/img/dokumentasi/';
                $file_name = $sampulOld;

                // Simpan data gambar ke dalam database
                $this->DokumentasiModel->ubahData($id, $file_name);
                $this->session->set_flashdata('success', true);
                $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Data anda telah diperbaharui.');
                redirect('dokumentasi');
            }
        }
    }

    public function delete($id)
    {
        $result = $this->DokumentasiModel->ambilData($id);
        $config['upload_path'] = './assets/img/dokumentasi/';
        $image_path = $config['upload_path'] . $result->sampul;
        if (file_exists($image_path)) {
            unlink($image_path);
        }

        $this->DokumentasiModel->deleteData($id);
        $this->session->set_flashdata('success', true);
        $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Data anda telah dihapuskan.');
        redirect('dokumentasi');
    }

    public function is_active($id)
    {
        $this->DokumentasiModel->is_active($id);
        $this->session->set_flashdata('success', true);
        $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Status akun anda telah diperbaharui.');
        redirect('dokumentasi');
    }
}