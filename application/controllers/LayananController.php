<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LayananController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') != TRUE) {
            redirect('auth');
        }

        $this->load->model('LayananModel');
        $this->load->model('PenggunaModel');

        $this->data = ['account' => $this->PenggunaModel->ambilData($this->session->userdata['user_id'])];
    }

    public function index()
    {
        $this->data['title'] = 'Layanan | Gemilang Teknik AC';
        $this->data['pages'] = 'Layanan';
        $this->data['result'] = $this->LayananModel->ambilData();

        $this->load->view('panel/layout/head', $this->data);
        $this->load->view('panel/layout/navbar', $this->data);
        $this->load->view('panel/layout/sidebar', $this->data);
        $this->load->view('panel/layanan/index', $this->data);
        $this->load->view('panel/layout/footer', $this->data);
        $this->load->view('panel/layout/javascript', $this->data);
    }

    public function create()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->data['title'] = 'Layanan | Gemilang Teknik AC';
            $this->data['pages'] = 'Layanan';

            $this->load->view('panel/layout/head', $this->data);
            $this->load->view('panel/layout/navbar', $this->data);
            $this->load->view('panel/layout/sidebar', $this->data);
            $this->load->view('panel/layanan/create', $this->data);
            $this->load->view('panel/layout/footer', $this->data);
            $this->load->view('panel/layout/javascript', $this->data);
        } else {
            $this->LayananModel->tambahData();
            $this->session->set_flashdata('success', true);
            $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Data anda telah tersimpan.');
            redirect('layanan');
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->data['title'] = 'Layanan | Gemilang Teknik AC';
            $this->data['pages'] = 'Layanan';
            $this->data['res'] = $this->LayananModel->ambilData($id);

            $this->load->view('panel/layout/head', $this->data);
            $this->load->view('panel/layout/navbar', $this->data);
            $this->load->view('panel/layout/sidebar', $this->data);
            $this->load->view('panel/layanan/edit', $this->data);
            $this->load->view('panel/layout/footer', $this->data);
            $this->load->view('panel/layout/javascript', $this->data);
        } else {
            $this->LayananModel->ubahData($id);
            $this->session->set_flashdata('success', true);
            $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Data anda telah diperbaharui.');
            redirect('layanan');
        }
    }

    public function delete($id)
    {
        $this->LayananModel->deleteData($id);
        $this->session->set_flashdata('success', true);
        $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Data anda telah dihapuskan.');
        redirect('layanan');
    }

    public function is_active($id)
    {
        $this->LayananModel->is_active($id);
        $this->session->set_flashdata('success', true);
        $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Status akun anda telah diperbaharui.');
        redirect('layanan');
    }
}
