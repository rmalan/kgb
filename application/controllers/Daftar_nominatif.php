<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_nominatif extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
        $this->isOpeOrOpd();
        $this->load->model('Model_daftarnominatif');
        $this->load->model('Model_riwayatproses');
        $this->load->helper('date_helper');        
    }

    public function index()
    {            
        /*$date=date_create("$skrg");
        date_sub($date,date_interval_create_from_date_string("2 year"));
        $nominatif = date_format($date,"Y-m-d");
        echo $nominatif;*/

        date_default_timezone_set("Asia/Jakarta");           
        $skrg = date("Y-m-d");

        if ($this->input->post('form'))
        {
            $id = $this->input->post('id');

            $data = array(
                'kgbproses_id'          => $this->input->post(''),
                'kgbproses_nip'         => $this->input->post('nip'),
                'kgbproses_tgl'         => $skrg,
                'kgbproses_nama'        => 1,
                'kgbproses_operator'    => $this->session->userdata('nama')
            );
            $query = $this->Model_riwayatproses->insert($data);

            $data = array(
                'kgbproses_id'          => $this->input->post(''),
                'kgbproses_nip'         => $this->input->post('nip'),
                'kgbproses_tgl'         => $skrg,
                'kgbproses_nama'        => 3,
                'kgbproses_operator'    => $this->session->userdata('nama')
            );
            $query = $this->Model_riwayatproses->insert($data);

            redirect('naik-gaji/form/'.$id);
        }

        if ($this->input->post('tunda'))
        {
            $id = $this->input->post('id');

            $data = array(
                'kgbproses_id'          => $this->input->post(''),
                'kgbproses_nip'         => $this->input->post('nip'),
                'kgbproses_tgl'         => $skrg,
                'kgbproses_nama'        => 1,
                'kgbproses_operator'    => $this->session->userdata('nama')
            );
            $query = $this->Model_riwayatproses->insert($data);

            $data = array(
                'kgbproses_id'          => $this->input->post(''),
                'kgbproses_nip'         => $this->input->post('nip'),
                'kgbproses_tgl'         => $skrg,
                'kgbproses_nama'        => 2,
                'kgbproses_operator'    => $this->session->userdata('nama')
            );
            $query = $this->Model_riwayatproses->insert($data);

            redirect('naik-gaji/tunda/'.$id);
        }

        $data['pageTitle'] = 'Daftar Nominatif';
        $data['daftar_nominatif'] = $this->Model_daftarnominatif->get()->result();
        $data['daftarnominatif_opd'] = $this->Model_daftarnominatif->getByOpd()->result();
        $data['pageContent'] = $this->load->view('daftar_nominatif', $data, TRUE);

        $this->load->view('template/layout', $data);                
    }
}