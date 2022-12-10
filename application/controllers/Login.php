<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
    }
    public function index()
    {
        $this->load->view('login');
    }

    public function ceklogin()
    {
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $cekData = [
            'email' => htmlentities($this->input->post('email')),
            'password' => htmlentities(md5($this->input->post('password'))),
        ];

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', validation_errors());
            redirect(site_url('login'));
        } else {
            $cekLogin = $this->UserModel->getWhere('user2', $cekData);
            if ($cekLogin->num_rows() > 0) {
                $session = [
                    'login' => 1,
                    'id' => $cekLogin->row_array()['id'],
                    'email' => $cekLogin->row_array()['email'],
                    'nama' => $cekLogin->row_array()['nama'],
                    'level' => $cekLogin->row_array()['level'],
                ];
                $this->session->set_userdata($session);

                redirect(site_url('dashboarduser'));
                echo 'login berhasil';
            } else {
                $this->session->set_flashdata(
                    'error',
                    'Email atau Password Salah'
                );
                redirect(site_url('login'));
            }
        }
    }
    public function register()
    {
        $this->load->view('register');
    }
    public function insert()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', validation_errors());
            redirect(site_url('login/register'));
        } else {
            $data = [
                'nama' => htmlentities($this->input->post('nama')),
                'email' => htmlentities($this->input->post('email')),
                'username' => htmlentities($this->input->post('username')),
                'password' => htmlentities(md5($this->input->post('password'))),
                'level' => 1,
            ];
            $this->db->insert('user2', $data);
            $this->session->set_flashdata(
                'success',
                'Regist berhasil, silahkan login'
            );
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->set_userdata('email', false);
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout', 'Anda telah logout');

        redirect('login');
    }
}
?>
