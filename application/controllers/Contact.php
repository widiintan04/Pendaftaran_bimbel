<?php

/*
	Author @GentaHP 2020
*/

defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('usermodel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->model('usermodel');

        // $this->Model_login->keamanan();
        $data['view'] = 'contact';
        $this->load->view('home', $data);
    }

    public function message()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('isi', 'Isi Pesan', 'required');

        if ($this->form_validation->run() == false) {
            print_r(validation_errors());
            echo 'masuk';
            die();
            $this->session->set_flashdata('error', validation_errors());
            redirect(site_url('home'));
        } else {
            $data = [
                'nama' => htmlentities($this->input->post('nama')),
                'email' => htmlentities($this->input->post('email')),
                'subject' => htmlentities($this->input->post('subject')),
                'isi' => htmlentities($this->input->post('isi')),
            ];
            $insert = $this->usermodel->pesan($data);

            if ($insert) {
                $this->session->set_flashdata(
                    'success',
                    'Pesan berhasil dikirim'
                );
                redirect(site_url('home'));
            } else {
                $this->session->set_flashdata('error', 'Pesan gagal dikirim');
                redirect(site_url('home'));
            }
        }
    }
}
