<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('siswa_model');
    }

    public function index()
    {
        $data['siswa'] = $this->siswa_model->get_data('tbl_siswa')->result();

        $this->load->view('template/header');
        $this->load->view('siswa', $data);
    }
}
?>
