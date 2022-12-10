<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{
    public function get_data($table)
    {
        return $this->db->get('tbl_siswa');
    }
    //edit
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update($table, $data, $where)
    {
        return $this->db->update($table, $data, $where);
    }

    public function getData($table)
    {
        return $this->db->order_by('id', 'DESC')->get($table);
    }

    public function getWhere($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
    public function siswa($data)
    {
        return $this->db->insert('tbl_siswa', $data);
    }
    public function pesan($data)
    {
        return $this->db->insert('komentar', $data);
    }
    public function komentar()
    {
        return $this->db->get('komentar');
    }

    public function get($table)
    {
        return $this->db->get('komentar');
    }

    public function simpanData($data = null)
    {
        $this->db->insert('user2', $data);
    }

    public function cekData($where = null)
    {
        return $this->db->get_where('user2', $where);
    }

    public function getUserWhere($where = null)
    {
        return $this->db->get_where('user2', $where);
    }

    public function cekUserAccess($where = null)
    {
        $this->db->select('*');
        $this->db->from('access_menu');
        $this->db->where($where);
        return $this->db->get();
    }

    public function getUserLimit()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->limit(10, 0);
        return $this->db->get();
    }
    public function joinPaket()
    {
        $this->db->select('id_siswa,nama,alamat,paket.keterangan,paket.paket');
        $this->db->from('tbl_siswa');
        $this->db->join('paket', 'paket.id_paket=tbl_siswa.id_paket');
        $this->db->order_by('tbl_siswa.id_siswa', 'DESC');
        $query = $this->db->get();
        return $query;
    }
}
