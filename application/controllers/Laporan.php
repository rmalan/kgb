<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
        $this->isOpeOrOpd();
        $this->load->model('Model_laporan');        
        $this->load->helper('date_helper');        
    }

    public function index()
    {
        $data['pageTitle'] = 'Laporan';
        $data['pageContent'] = $this->load->view('laporan', $data, TRUE);

        $this->load->view('template/layout', $data);
    }

    public function cetak($tahun = null)
    {
        $tahun = $this->input->post('tahun');
        $data['pageTitle'] = 'Cetak Laporan';
        $data['daftarNominatif'] = $this->Model_laporan->get_dnominatif($tahun)->result();
        $data['daftarNominatifLewat'] = $this->Model_laporan->get_daftarnominatif($tahun)->result();
        $data['daftarNominatif_opd'] = $this->Model_laporan->get_dnominatifOpd($tahun)->result();
        $data['daftarNominatifLewat_opd'] = $this->Model_laporan->get_daftarnominatifOpd($tahun)->result();
        $data['kgb'] = $this->Model_laporan->get_kgb($tahun)->result();
        $data['kgb_opd'] = $this->Model_laporan->get_kgbOpd($tahun)->result();
        $data['tahun'] = $this->input->post('tahun');
        $html = $this->load->view('cetak_laporan', $data, TRUE);           

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->AddPage('L');
		$mpdf->WriteHTML($html);
		$mpdf->Output();
    }
}