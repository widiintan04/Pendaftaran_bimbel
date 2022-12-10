<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
    }
    public function index()
    {
        // $this->load->view('template/header');
        $data['paket'] = $this->UserModel->getPaket()->result();
        $this->load->view('daftar', $data);
    }
    public function daftar()
    {
        $data['paket'] = $this->UserModel->getPaket()->result();
        $this->load->view('daftar', $data);
    }
    public function insert()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('no_telp', 'no_telp', 'required');
        $this->form_validation->set_rules(
            'asal_sekolah',
            'asal_sekolah',
            'required'
        );
        $this->form_validation->set_rules('id_paket', 'id_paket', 'required');
        $this->form_validation->set_rules(
            'tempat_lahir',
            'tempat_lahir',
            'required'
        );
        $this->form_validation->set_rules(
            'tanggal_lahir',
            'tanggal_lahir',
            'required'
        );
        $this->form_validation->set_rules(
            'jenis_kelamin',
            'jenis_kelamin',
            'required'
        );

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', validation_errors());
            redirect(site_url('daftar'));
        } else {
            $data = [
                'nama' => htmlentities($this->input->post('nama')),
                'alamat' => htmlentities($this->input->post('alamat')),
                'no_telp' => htmlentities($this->input->post('no_telp')),
                'asal_sekolah' => htmlentities(
                    $this->input->post('asal_sekolah')
                ),
                'id_paket' => htmlentities($this->input->post('id_paket')),
                'tempat_lahir' => htmlentities(
                    $this->input->post('tempat_lahir')
                ),
                'tanggal_lahir' => htmlentities(
                    $this->input->post('tanggal_lahir')
                ),
                'jenis_kelamin' => htmlentities(
                    $this->input->post('jenis_kelamin')
                ),
            ];
            $this->db->insert('tbl_siswa', $data);
            $this->session->set_flashdata('success', 'data berhasil');
            redirect('daftar');
        }
    }
    // edit
    public function edit($id)
    {
        $where = ['id_siswa' => $id];
        $data['paket'] = $this->UserModel->getPaket()->result();
        $data['daftar'] = $this->UserModel
            ->edit_data($where, 'tbl_siswa')
            ->result();
        $data['view'] = 'daftar_form';

        $this->load->view('daftar_form', $data);
    }

    // update
    public function update()
    {
        $this->form_validation->set_rules('id_siswa', 'id_siswa', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('no_telp', 'no_telp', 'required');
        $this->form_validation->set_rules(
            'asal_sekolah',
            'asal_sekolah',
            'required'
        );
        $this->form_validation->set_rules('id_paket', 'id_paket', 'required');
        $this->form_validation->set_rules(
            'tempat_lahir',
            'tempat_lahir',
            'required'
        );
        $this->form_validation->set_rules(
            'tanggal_lahir',
            'tanggal_lahir',
            'required'
        );
        $this->form_validation->set_rules(
            'jenis_kelamin',
            'jenis_kelamin',
            'required'
        );

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('error', validation_errors());
            redirect(site_url('daftar/edit/' . $this->input->post('id_siswa')));
        } else {
            $where = [
                'id_siswa' => htmlentities($this->input->post('id_siswa')),
            ];
            $data = [
                'id_siswa' => htmlentities($this->input->post('id_siswa')),
                'nama' => htmlentities($this->input->post('nama')),
                'alamat' => htmlentities($this->input->post('alamat')),
                'no_telp' => htmlentities($this->input->post('no_telp')),
                'asal_sekolah' => htmlentities(
                    $this->input->post('asal_sekolah')
                ),
                'id_paket' => htmlentities($this->input->post('id_paket')),
                'tempat_lahir' => htmlentities(
                    $this->input->post('tempat_lahir')
                ),
                'tanggal_lahir' => htmlentities(
                    $this->input->post('tanggal_lahir')
                ),
                'jenis_kelamin' => htmlentities(
                    $this->input->post('jenis_kelamin')
                ),
                // 'mdate' => date('Y-m-d h:i:s')
            ];
            $update = $this->UserModel->update_data('tbl_siswa', $data, $where);

            if ($update) {
                $this->session->set_flashdata(
                    'success',
                    'Data berhasil diedit'
                );
                redirect(site_url('pendaftar'));
            } else {
                $this->session->set_flashdata('error', 'Data gagal diedit');
                redirect(
                    site_url(
                        'daftar_form/edit/' . $this->input->post('id_siswa')
                    )
                );
            }
        }
    }
    // update
    // public function update()
    // {
    //     $id = $this->input->post('id_siswa');
    //     $nama = $this->input->post('nama');
    //     $alamat = $this->input->post('alamat');
    //     $no_telp = $this->input->post('no_telp');
    //     $asal_sekolah = $this->input->post('asal_sekolah');
    //     $id_paket = $this->input->post('id_paket');
    //     $tempat_lahir = $this->input->post('tempat_lahir');
    //     $tanggal_lahir = $this->input->post('tanggal_lahir');
    //     $jenis_kelamin = $this->input->post('jenis_kelamin');
    //     // $gambar		= $this->input->post('gambar');

    //     $data = [
    //         'id_siswa' => $id,
    //         'nama' => $nama,
    //         'alamat' => $alamat,
    //         'no_telp' => $no_telp,
    //         'asal_sekolah' => $asal_sekolah,
    //         'id_paket' => $id_paket,
    //         'tempat_lahir' => $tempat_lahir,
    //         'tanggal_lahir' => $tanggal_lahir,
    //         'jenis_kelamin' => $jenis_kelamin,
    //         // 'gambar' 	=> $gambar
    //     ];
    //     $where = [
    //         'id_siswa' => $id,
    //     ];
    //     $this->UserModel->update_data('tbl_siswa', $where, $data);
    //     $this->session->set_flashdata('success', 'Data berhasil di edit');
    //     redirect(site_url('pendaftar'));
    // }

    // update
    // public function update()
    // {
    //     $this->form_validation->set_rules('id_siswa', 'id_siswa', 'required');
    //     $this->form_validation->set_rules('nama', 'nama', 'required');
    //     $this->form_validation->set_rules('alamat', 'alamat', 'required');
    //     $this->form_validation->set_rules('no_telp', 'no_telp', 'required');
    //     $this->form_validation->set_rules(
    //         'asal_sekolah',
    //         'asal_sekolah',
    //         'required'
    //     );
    //     $this->form_validation->set_rules('id_paket', 'id_paket', 'required');
    //     $this->form_validation->set_rules(
    //         'tempat_lahir',
    //         'tempat_lahir',
    //         'required'
    //     );
    //     $this->form_validation->set_rules(
    //         'tanggal_lahir',
    //         'tanggal_lahir',
    //         'required'
    //     );
    //     $this->form_validation->set_rules(
    //         'jenis_kelamin',
    //         'jenis_kelamin',
    //         'required'
    //     );

    //     if ($this->form_validation->run() == false) {
    //         $this->session->set_flashdata('error', validation_errors());
    //         redirect(
    //             site_url('daftar_form/edit/' . $this->input->post('id_siswa'))
    //         );
    //     } else {
    //         // $foto = $_FILES['gambar']['name'];

    //         // if (empty($foto)) {
    //         //     $where = [
    //         //         'id_siswa' => htmlentities($this->input->post('id_siswa')),
    //         //     ];
    //         $data = [
    //             'id_siswa' => htmlentities($this->input->post('id_siswa')),
    //             'nama' => htmlentities($this->input->post('nama')),
    //             'alamat' => htmlentities($this->input->post('alamat')),
    //             'no_telp' => htmlentities($this->input->post('no_telp')),
    //             'asal_sekolah' => htmlentities(
    //                 $this->input->post('asal_sekolah')
    //             ),
    //             'id_paket' => htmlentities($this->input->post('id_paket')),
    //             'tempat_lahir' => htmlentities(
    //                 $this->input->post('tempat_lahir')
    //             ),
    //             'tanggal_lahir' => htmlentities(
    //                 $this->input->post('tanggal_lahir')
    //             ),
    //             'jenis_kelamin' => htmlentities(
    //                 $this->input->post('jenis_kelamin')
    //             ),
    //             // 'mdate' => date('Y-m-d h:i:s')
    //         ];

    //         $this->Models->update_data('tbl_siswa', $data, $where);
    //         $this->session->set_flashdata('success', 'Data berhasil di edit');
    //         redirect('daftar');
    //         $where = [
    //             'id_siswa' => htmlentities($this->input->post('id_siswa')),
    //         ];
    //         $data = [
    //             'id_siswa' => htmlentities($this->input->post('id_siswa')),
    //             'nama' => htmlentities($this->input->post('nama')),
    //             'alamat' => htmlentities($this->input->post('alamat')),
    //             'no_telp' => htmlentities($this->input->post('no_telp')),
    //             'asal_sekolah' => htmlentities(
    //                 $this->input->post('asal_sekolah')
    //             ),
    //             'id_paket' => htmlentities($this->input->post('id_paket')),
    //             'tempat_lahir' => htmlentities(
    //                 $this->input->post('tempat_lahir')
    //             ),
    //             'tanggal_lahir' => htmlentities(
    //                 $this->input->post('tanggal_lahir')
    //             ),
    //             'jenis_kelamin' => htmlentities(
    //                 $this->input->post('jenis_kelamin')
    //             ),
    //             // 'mdate' => date('Y-m-d h:i:s'),
    //         ];

    //         $this->Models->update_data('tbl_siswa', $data, $where);
    //         $this->session->set_flashdata('success', 'Data berhasil di edit');
    //         redirect('daftar');
    //     }
    // }

    public function logout()
    {
        $this->session->set_userdata('email', false);
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout', 'Anda telah logout');

        redirect('login');
    }
}

?>
