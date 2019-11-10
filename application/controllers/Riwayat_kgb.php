<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat_kgb extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();        
        $this->load->model('Model_riwayatkgb');
        $this->load->helper('date_helper');
    }

    public function index()
    {                
        $data['pageTitle'] = 'Riwayat KGB';
        $data['riwayat_kgb'] = $this->Model_riwayatkgb->get()->result();
        $data['riwayatkgb_opd'] = $this->Model_riwayatkgb->getByOpd()->result();
        $data['riwayatkgb_pegawai'] = $this->Model_riwayatkgb->getByPegawai()->result();
        $data['pageContent'] = $this->load->view('riwayat_kgb', $data, TRUE);

        $this->load->view('template/layout', $data);        
    }

    public function pegawai($nip = null)
    {        
        $riwayatkgb = $this->Model_riwayatkgb->get_where(array('riwayatkgb_nip' => $nip))->result();        

        $data['pageTitle'] = 'Riwayat KGB Pegawai';
        $data['riwayat_kgb'] = $riwayatkgb;
        $data['pageContent'] = $this->load->view('riwayatkgb_pegawai', $data, TRUE);

        $this->load->view('template/layout', $data);
    }
}