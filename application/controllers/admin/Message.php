<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Message extends CI_Controller
{
    public function index()
    {
        $this->load->model('siswa_model');
        // $this->models->keamanan();
        $data['komentar'] = $this->siswa_model->get('komentar')->result();

        $data['view'] = 'admin/message';
        $this->load->view('admin/message', $data);
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
        $where = ['id_komentar' => $id];
        $this->hapus_data($where, 'komentar');
        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect('admin/message');
    }
}
