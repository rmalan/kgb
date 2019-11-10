<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();        
        $this->load->model('Model_dashboard');
    }

    public function index()
    {
        $data['pageTitle'] = 'Dashboard';
        // Operator
        $data['asn'] = $this->Model_dashboard->count_asn();
        $data['daftarNominatif'] = $this->Model_dashboard->get_dnominatif();
        $data['nominatifTertunda'] = $this->Model_dashboard->get_nominatift();
        // Opd
        $data['asn_opd'] = $this->Model_dashboard->count_asnOpd();
        $data['daftarNominatif_opd'] = $this->Model_dashboard->get_dnominatifOpd();
        $data['nominatifTertunda_opd'] = $this->Model_dashboard->get_nominatiftOpd();
        
        $data['pageContent'] = $this->load->view('dashboard', $data, TRUE);

        $this->load->view('template/layout', $data);
    }

    public function pegawai()
    {
        $data['pageTitle'] = 'ASN';        
        $data['asn'] = $this->Model_dashboard->get_asn()->result(); //Operator        
        $data['asn_opd'] = $this->Model_dashboard->get_asnOpd()->result(); //Opd

        $data['pageContent'] = $this->load->view('pegawai', $data, TRUE);

        $this->load->view('template/layout', $data);
    }
}