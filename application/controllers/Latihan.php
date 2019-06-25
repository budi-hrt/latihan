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

    public function tampilkan()
    {
        // $data['invoice']=$this->m_latihan->cari_inv();
        // foreach ( $invoice as $i){
        //     $inv=$i=>'inv_keluar';
        // }
        // $isi['data']=$this->m_latihan->cari_inv()->result();
        $data = $this->m_latihan->cari_inv()->result();
        echo json_encode($data);

        // $this->load->view('tampil',$isi);
    }
}
