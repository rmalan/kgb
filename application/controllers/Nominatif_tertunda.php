<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Nominatif_tertunda extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
        $this->isOpeOrOpd();
        $this->load->model('Model_nominatiftertunda');
        $this->load->model('Model_riwayatproses');
        $this->load->helper('date_helper');
    }

    public function index()
    {
        $data['pageTitle'] = 'Nominatif Tertunda';
        $data['nominatif_tertunda'] = $this->Model_nominatiftertunda->get()->result();
        $data['nominatiftertunda_opd'] = $this->Model_nominatiftertunda->getByOpd()->result();
        $data['pageContent'] = $this->load->view('nominatif_tertunda', $data, TRUE);

        $this->load->view('template/layout', $data);
    }

    public function cek_berkas($id = null)
    {
        date_default_timezone_set("Asia/Jakarta");           
        $skrg = date("Y-m-d");

        if($this->input->post('submit'))
        {
            $data = array(
                'kgbproses_id'          => $this->input->post(''),
                'kgbproses_nip'         => $this->input->post('nip'),
                'kgbproses_tgl'         => $skrg,
                'kgbproses_nama'        => 3,
                'kgbproses_operator'    => $this->session->userdata('nama')
            );
            $query = $this->Model_riwayatproses->insert($data);

            $data = array(
                'riwayatkgb_status' => NULL
            );
            $query = $this->Model_nominatiftertunda->update($id, $data);

            redirect('naik-gaji/form/'.$id);
        }

        $tunda = $this->Model_nominatiftertunda->get_where(array('riwayatkgb_id' => $id))->row();        
    
        // Jika data user tidak ada maka show 404
        if (!$tunda) show_404();

        $data['pageTitle'] = 'Cek Berkas KGB';        
        $data['nominatif_tertunda'] = $tunda;
        $data['pageContent'] = $this->load->view('cek_berkas', $data, TRUE);

        $this->load->view('template/layout', $data);
    }
}