<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PenggunaModel');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->session->userdata('logged') != TRUE) {
            if ($this->form_validation->run() == false) {
                $data = [
                    'title' => 'Form Login'
                ];

                $this->load->view('auth/login', $data);
            } else {
                $this->_login();
            }
        } else {
            redirect(base_url('panel'));
        }
    }

    private function _login()
    {
        $username = htmlspecialchars($this->input->post('username', true));
        $password = htmlspecialchars($this->input->post('password', true));

        $user = $this->db->get_where('tb_users', ['username' => $username])->row_array();

        if ($user) {
            if ($user['is_active'] === '1') {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'user_id' => $user['user_id'],
                        'role' => $user['role'],
                        'logged' => TRUE
                    ];

                    $this->session->set_userdata($data);
                    redirect(base_url('panel'));
                } else {
                    $this->session->set_flashdata('danger', true);
                    $this->session->set_flashdata('message', '<strong>Tidak Berhasil!</strong> Password Salah.');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('danger', true);
                $this->session->set_flashdata('message', '<strong>Akun Anda Dinonaktifkan!</strong>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('danger', true);
            $this->session->set_flashdata('message', '<strong>Tidak Berhasil!</strong> Username tidak terdaftar.');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('success', true);
        $this->session->set_flashdata('message', '<strong>Berhasil!</strong> Kamu berhasil keluar dari aplikasi.');
        redirect('auth');
    }
}
