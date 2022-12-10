<?php
class UserModel extends CI_Model
{
    public function getWhere($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function getPaket()
    {
        $this->db->select('*');
        $this->db->from('paket');
        $this->db->order_by('id_paket', 'ASC');
        return $this->db->get();
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
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data($table, $data, $where)
    {
        return $this->db->update($table, $data, $where);
    }
    public function about()
    {
        return $this->db->get('about');
    }
    // tampil data pesan
    public function tampil_data()
    {
        return $this->db->get('komentar');
    }
    public function pesan($data)
    {
        return $this->db->insert('komentar', $data);
    }
}
