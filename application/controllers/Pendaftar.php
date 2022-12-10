<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('siswa_model');
    }

    public function index()
    {
        $data['siswa'] = $this->siswa_model->get_data('tbl_siswa')->result();
        $data['view'] = 'pendaftar';
        $data['pendaftar'] = $this->siswa_model->joinPaket()->result();
        $this->load->view('pendaftar', $data);
    }
}
