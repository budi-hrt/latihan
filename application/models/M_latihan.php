<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_latihan extends CI_Model
{

    public function tampil()
    {
        $query = $this->db->get('people');
        return $query;
    }


    public function cari_inv()
    {
        $q = $this->db->query("SELECT inv_keluar FROM tb_keluar ORDER BY inv_keluar DESC LIMIT 1");
        foreach ($q->result() as $k) {
            $inv = ($k->inv_keluar);

            $this->db->select('*');
            $this->db->from('detil_keluar');
            $this->db->where('inv_keluar', $inv);
            $query = $this->db->get();
            return $query;
        }
        // return $inv;


    }
}
