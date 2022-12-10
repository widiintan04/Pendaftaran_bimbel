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
        $data['view'] = 'admin/pendaftar';
        $data['pendaftar'] = $this->siswa_model->joinPaket()->result();
        $this->load->view('admin/pendaftar', $data);
    }
    // hapus
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    // hapus
    public function delete($id)
    {
        $where = ['id_siswa' => $id];
        $this->hapus_data($where, 'tbl_siswa');
        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect('admin/pendaftar');
    }
}
?>
