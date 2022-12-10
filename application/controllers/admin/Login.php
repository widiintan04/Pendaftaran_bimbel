<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('siswa_model');
    }

    public function index()
    {
        $this->load->view('admin/login');
    }

    public function logout()
    {
        $this->session->set_userdata('username', false);
        $this->session->sess_destroy();
        $this->session->set_flashdata('success', 'Anda telah logout');

        redirect('admin/login');
    }

    public function ceklogin()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $cekData = [
            'username' => htmlentities($this->input->post('username')),
            'password' => htmlentities(md5($this->input->post('password'))),
        ];

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', validation_errors());
            redirect(site_url('admin/login'));
        } else {
            $cekLogin = $this->siswa_model->getWhere('admin', $cekData);
            if ($cekLogin->num_rows() > 0) {
                $session = [
                    'login' => 1,
                    'id' => $cekLogin->row_array()['id'],
                ];
                $this->session->set_userdata($session);

                redirect(site_url('admin/dashboard'));
            } else {
                $this->session->set_flashdata(
                    'error',
                    'Username atau password salah'
                );
                redirect(site_url('admin/login'));
            }
        }
    }
}
