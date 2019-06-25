<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Latihan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_latihan');
    }




    public function index()
    {
        $data['data'] = $this->m_latihan->tampil()->result_array();
        $this->load->view('tampil', $data);
    }
}
