<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PengaturanController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') != TRUE) {
            redirect('auth');
        }

        $this->load->model('PenggunaModel');

        $this->data = ['account' => $this->PenggunaModel->ambilData($this->session->userdata['user_id'])];
    }

    public function index()
    {
        $this->data['title'] = 'Pengaturan | Gemilang Teknik AC';
        $this->data['pages'] = 'Pengaturan';

        $this->load->view('panel/layout/head', $this->data);
        $this->load->view('panel/layout/navbar', $this->data);
        $this->load->view('panel/layout/sidebar', $this->data);
        $this->load->view('panel/pengaturan/index', $this->data);
        $this->load->view('panel/layout/footer', $this->data);
        $this->load->view('panel/layout/javascript', $this->data);
    }
}
