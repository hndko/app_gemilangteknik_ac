<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->data = [
            'phone_number' => '082112423492',
            'email' => 'fajarseptio1998@gmail.com',
        ];
    }

    public function index()
    {
        $this->data['title'] = 'Gemilang Teknik AC | Service dan Perbaikan AC Terbaik di Jakarta';

        $this->load->view('home', $this->data);
    }
}
