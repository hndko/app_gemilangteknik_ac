<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LayananModel');
        $this->load->model('DokumentasiModel');
        $this->load->model('KlienModel');
        $this->load->model('BlogModel');

        $this->data = [
            'phone_number' => '082112423492',
            'email' => 'admin@gemilangac.com',
            'message' => 'Hallo Gemilang AC, saya memiliki keluhan pada AC saya, mohon bantuannya...'
        ];
    }

    public function index()
    {
        $this->data['title'] = 'Gemilang Teknik AC | Service dan Perbaikan AC Terbaik di Jakarta';
        $this->data['layanan'] = $this->LayananModel->showHome();
        $this->data['dokumentasi'] = $this->DokumentasiModel->showHome();
        $this->data['klien'] = $this->KlienModel->showHome();

        $this->load->view('layout/head', $this->data);
        $this->load->view('layout/navbar', $this->data);
        $this->load->view('layout/hero', $this->data);
        $this->load->view('home', $this->data);
        $this->load->view('layout/footer', $this->data);
        $this->load->view('layout/javascript', $this->data);
    }

    public function artikel()
    {
        // Konfigurasi pagination
        $config['base_url'] = base_url('artikel');
        $config['total_rows'] = $this->BlogModel->countArtikel();
        $config['per_page'] = 6;

        $this->pagination->initialize($config);

        $this->data['start'] = $this->uri->segment(2);
        $this->data['title'] = 'Gemilang Teknik AC | Service dan Perbaikan AC Terbaik di Jakarta';
        $this->data['blog'] = $this->BlogModel->getArtikelPage($config['per_page'], $this->data['start']);
        $this->data['blog_populer'] = $this->BlogModel->showPopulerPost();

        $this->load->view('layout/head', $this->data);
        $this->load->view('layout/navbar', $this->data);
        $this->load->view('artikel', $this->data);
        $this->load->view('layout/footer', $this->data);
        $this->load->view('layout/javascript', $this->data);
    }

    public function artikel_details($slug)
    {
        $this->data['title'] = 'Gemilang Teknik AC | Service dan Perbaikan AC Terbaik di Jakarta';
        $this->data['res'] = $this->BlogModel->showHome($slug);
        $this->data['blog_populer'] = $this->BlogModel->showPopulerPost();

        $this->load->view('layout/head', $this->data);
        $this->load->view('layout/navbar', $this->data);
        $this->load->view('artikel_details', $this->data);
        $this->load->view('layout/footer', $this->data);
        $this->load->view('layout/javascript', $this->data);
    }

    public function updateCountView()
    {
        $article_id = $this->input->post('article_id');
        if (!empty($article_id)) {
            $this->BlogModel->updateCountView($article_id);
            echo 'success';
        } else {
            echo 'error';
        }
    }

    public function search()
    {
        $keyword = $this->input->get('q'); // Get the search query from the URL parameter 'q'

        $this->data['title'] = 'Gemilang Teknik AC | Service dan Perbaikan AC Terbaik di Jakarta';
        $this->data['blog_populer'] = $this->BlogModel->showPopulerPost();
        $this->data['search_results'] = $this->BlogModel->searchArticles($keyword);

        // Load your view to display the search results
        $this->load->view('layout/head', $this->data);
        $this->load->view('layout/navbar', $this->data);
        $this->load->view('search_results', $this->data); // Create a new view file for displaying search results
        $this->load->view('layout/footer', $this->data);
        $this->load->view('layout/javascript', $this->data);
    }
}
