<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
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

        $this->load->view('panel/index', $this->data);
    }
}
