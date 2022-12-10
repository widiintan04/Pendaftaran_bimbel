<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('siswa_model');
        if ($this->session->userdata('login') != 1) {
            $this->session->set_flashdata(
                'error',
                'Anda harus login terlebih dahulu!'
            );
            redirect(site_url('admin/login'));
        }
    }

    public function index()
    {
        $data['view'] = 'admin/dashboard';
        $data['count1'] = $this->count1();
        $data['count2'] = $this->count2();
        $this->load->view('admin/dashboard', $data);
    }
    private function count1()
    {
        $sql = 'SELECT count(nama) as nama FROM tbl_siswa';
        $result = $this->db->query($sql);
        return $result->row()->nama;
    }
    private function count2()
    {
        $sql = 'SELECT count(nama) as nama FROM komentar';
        $result = $this->db->query($sql);
        return $result->row()->nama;
    }
}
