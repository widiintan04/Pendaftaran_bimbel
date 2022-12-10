<?php

defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function index()
    {
        $this->load->model('usermodel');
        $data['about'] = $this->usermodel->about()->result();
        $data['view'] = 'admin/about';
        $this->load->view('admin/about', $data);
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
        $where = ['id_about' => $id];
        $this->hapus_data($where, 'about');
        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect('admin/about');
    }
    // edit data
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function getWhere($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($table, $data, $where)
    {
        return $this->db->update($table, $data, $where);
    }

    public function edit($id)
    {
        $where = ['id_about' => $id];
        $data['about'] = $this->edit_data($where, 'about')->result();
        $data['view'] = 'admin/about_form';
        $this->load->view('admin/about_form', $data);
    }

    public function update()
    {
        $this->form_validation->set_rules('id_about', 'ID', 'required');
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', validation_errors());
            redirect(
                site_url(
                    'admin/about_form/edit/' . $this->input->post('id_about')
                )
            );
        } else {
            $foto = $_FILES['gambar']['name'];

            if (empty($foto)) {
                $where = [
                    'id_about' => htmlentities($this->input->post('id_about')),
                ];
                $data = [
                    'judul' => htmlentities($this->input->post('judul')),
                    'isi' => htmlentities($this->input->post('isi')),
                ];
                $update = $this->update_data('about', $data, $where);

                if ($update) {
                    $this->session->set_flashdata(
                        'success',
                        'Data berhasil diedit'
                    );
                    redirect(site_url('admin/about_form'));
                } else {
                    $this->session->set_flashdata('error', 'Data gagal diedit');
                    redirect(site_url('admin/about_form/add'));
                }
            } else {
                $ambext = explode('.', $foto);
                $ekstensi = end($ambext);
                $nama_baru = date('YmdHis');
                $nama_file = $nama_baru . '.' . $ekstensi;
                $config['upload_path'] = './assets/about/';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['file_name'] = $nama_file;
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('gambar')) {
                    $this->session->set_flashdata(
                        'error',
                        'Gambar gagal diupload'
                    );
                    redirect(site_url('admin/about_form/add'));
                } else {
                    $menu = $this->getWhere('about', [
                        'id_about' => htmlentities(
                            $this->input->post('id_about')
                        ),
                    ])->row_array();
                    unlink('assets/about/' . $menu['gambar']);

                    $where = [
                        'id_about' => htmlentities(
                            $this->input->post('id_about')
                        ),
                    ];
                    $data = [
                        'judul' => htmlentities($this->input->post('judul')),
                        'gambar' => $nama_file,
                        'isi' => htmlentities($this->input->post('isi')),
                    ];
                    $update = $this->update_data('about', $data, $where);

                    if ($update) {
                        $this->session->set_flashdata(
                            'success',
                            'Data berhasil diedit'
                        );
                        redirect(site_url('admin/about'));
                    } else {
                        $this->session->set_flashdata(
                            'error',
                            'Data gagal diedit'
                        );
                        redirect(
                            site_url(
                                'admin/about_form/edit/' .
                                    $this->input->post('id_about')
                            )
                        );
                    }
                }
            }
        }
    }

    public function add()
    {
        $data['view'] = 'admin/about_form';
        $this->load->view('admin/about_form', $data);
    }

    public function insert()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');
        if (empty($_FILES['gambar']['name'])) {
            $this->form_validation->set_rules('gambar', 'Gambar', 'required');
        }

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', validation_errors());
            redirect(site_url('admin/about'));
        } else {
            $foto = $_FILES['gambar']['name'];
            $ambext = explode('.', $foto);
            $ekstensi = end($ambext);
            $nama_baru = date('YmdHis');
            $nama_file = $nama_baru . '.' . $ekstensi;
            $config['upload_path'] = './assets/about/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['file_name'] = $nama_file;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                $this->session->set_flashdata(
                    'error',
                    'Gambar gagal diupload! ' . $this->upload->display_errors()
                );
                redirect(site_url('admin/about_form/add'));
            } else {
                $data = [
                    'judul' => htmlentities($this->input->post('judul')),
                    'isi' => htmlentities($this->input->post('isi')),
                    'gambar' => $nama_file,
                ];
                $this->db->insert('about', $data);
                $this->session->set_flashdata(
                    'success',
                    'Data berhasil ditambah'
                );
                redirect('admin/about');
            }
        }
    }
}
