<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardUser extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
        if ($this->session->userdata('login') != 1) {
            $this->session->set_flashdata(
                'error',
                'Anda Harus Login Terlebih Dahulu!'
            );
            redirect(site_url('login'));
        }
    }
    public function index()
    {
        $this->load->view('dashboard_user');
    }
}
?>
