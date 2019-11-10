<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat_proses extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();        
        $this->load->model('Model_riwayatproses');
        $this->load->helper('date_helper');        
    }

    public function index()
    {            
        $data['pageTitle'] = 'Riwayat Proses KGB';
        $data['riwayat_proses'] = $this->Model_riwayatproses->get()->result();        
        $data['pageContent'] = $this->load->view('riwayat_proses', $data, TRUE);

        $this->load->view('template/layout', $data);                
    }

    public function pegawai($nip = null)
    {        
        $kgbproses = $this->Model_riwayatproses->get_where(array('kgbproses_nip' => $nip))->result();        

        $data['pageTitle'] = 'Riwayat Proses KGB';
        $data['riwayat_proses'] = $kgbproses;
        $data['pageContent'] = $this->load->view('riwayatproses_pegawai', $data, TRUE);

        $this->load->view('template/layout', $data);
    }
}