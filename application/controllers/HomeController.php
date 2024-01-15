<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->data = [
            'phone_number' => '082112423492',
            'email' => 'admin@gemilangac.com',
            'message' => 'Hallo Gemilang AC, saya memiliki keluhan pada AC saya, mohon bantuannya...'
        ];
    }

    public function index()
    {
        $this->data['title'] = 'Gemilang Teknik AC | Service dan Perbaikan AC Terbaik di Jakarta';

        $this->load->view('layout/head', $this->data);
        $this->load->view('layout/navbar', $this->data);
        $this->load->view('layout/hero', $this->data);
        $this->load->view('home', $this->data);
        $this->load->view('layout/footer', $this->data);
        $this->load->view('layout/javascript', $this->data);
    }

    public function artikel()
    {
        $this->data['title'] = 'Gemilang Teknik AC | Service dan Perbaikan AC Terbaik di Jakarta';

        $this->load->view('layout/head', $this->data);
        $this->load->view('layout/navbar', $this->data);
        $this->load->view('artikel', $this->data);
        $this->load->view('layout/footer', $this->data);
        $this->load->view('layout/javascript', $this->data);
    }

    public function artikel_details()
    {
        $this->data['title'] = 'Gemilang Teknik AC | Service dan Perbaikan AC Terbaik di Jakarta';

        $this->load->view('layout/head', $this->data);
        $this->load->view('layout/navbar', $this->data);
        $this->load->view('artikel_details', $this->data);
        $this->load->view('layout/footer', $this->data);
        $this->load->view('layout/javascript', $this->data);
    }
}
