<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Naik_gaji extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
        $this->isOpeOrOpd();
        $this->load->model('Model_naikgaji');
        $this->load->model('Model_riwayatproses');
        $this->load->helper('date_helper');        
    }

    public function form($id = null)
    {
        date_default_timezone_set("Asia/Jakarta");           
        $skrg = date("Y-m-d");
        
        if ($this->input->post('submit')) {
            $data = array(
                'kgbproses_id'          => $this->input->post(''),
                'kgbproses_nip'         => $this->input->post('nip'),
                'kgbproses_tgl'         => $skrg,
                'kgbproses_nama'        => 4,
                'kgbproses_operator'    => $this->session->userdata('nama')
            );
            $query = $this->Model_riwayatproses->insert($data);

            $data = array(
                'kgbproses_id'          => $this->input->post(''),
                'kgbproses_nip'         => $this->input->post('nip'),
                'kgbproses_tgl'         => $skrg,
                'kgbproses_nama'        => 5,
                'kgbproses_operator'    => $this->session->userdata('nama')
            );
            $query = $this->Model_riwayatproses->insert($data);

            $data = array(                                 
                'riwayatkgb_status'     => 'Selesai'
            );                
            $query = $this->Model_naikgaji->update($id, $data);

            $data = array(                
                'riwayatkgb_id'         => $this->input->post(''),
                'riwayatkgb_id_sblm'    => $this->input->post('id'),
                'riwayatkgb_nip'        => $this->input->post('nip'),
                'riwayatkgb_gaji_lama'  => $this->input->post('gaji_lama'),
                'riwayatkgb_gaji_baru'  => $this->input->post('gaji_baru'),
                'riwayatkgb_masa_kerja' => $this->input->post('masker_baru'),
                'riwayatkgb_tmt'        => $this->input->post('tmt_baru'),
                'riwayatkgb_surat'      => $this->input->post('surat'),
                'riwayatkgb_no_surat'   => $this->input->post('no_surat'),
                'riwayatkgb_tgl_surat'  => $this->input->post('tgl_surat'),                      
            );
        
            // Jalankan function insert pada model
            $query = $this->Model_naikgaji->insert($data);

            // refresh page
            redirect('naik-gaji/verifikasi/'.$id);
        }             

        // Ambil data dari database
        $kgb = $this->Model_naikgaji->get_where(array('riwayatkgb_id' => $id))->row();        
    
        // Jika data user tidak ada maka show 404
        if (!$kgb) show_404();    

        $data['pageTitle'] = 'Form KGB Pegawai';
        $data['kgb'] = $kgb;        
        $data['pageContent'] = $this->load->view('form_kgb', $data, TRUE);

        $this->load->view('template/layout', $data);
    }

    public function tunda ($id = null)
    {
        $data = array(                 
            'riwayatkgb_status'     => 'Tertunda'
        );
    
        // Jalankan function insert pada model
        $query = $this->Model_naikgaji->update($id, $data);

        // cek jika query berhasil
        if ($query) $message = array('status' => true, 'message' => 'Berkas pegawai tidak lengkap, sehingga ditambahkan ke nominatif tertunda');
        else $message = array('status' => true, 'message' => 'Berkas pegawai lengkap');
    
        // simpan message sebagai session
        $this->session->set_flashdata('message', $message);

        // refresh page
        redirect('nominatif-tertunda');
    }

    public function verifikasi($id = null)
    {
        $kgb = $this->Model_naikgaji->get_where(array('riwayatkgb_id_sblm' => $id))->row();        
    
        // Jika data user tidak ada maka show 404
        if (!$kgb) show_404();    

        $data['pageTitle'] = 'Verifkasi KGB Pegawai';
        $data['kgb'] = $kgb;        
        $data['pageContent'] = $this->load->view('verif_kgb', $data, TRUE);

        $this->load->view('template/layout', $data);
    }

    public function cetak($id = null, $skpd = null)
    {        
        $kgb = $this->Model_naikgaji->get_where(array('riwayatkgb_id_sblm' => $id))->row();
        $skpd = $kgb->asn_skpd;
        $config = $this->Model_naikgaji->get_config(array('config_skpd' => $skpd))->row();
    
        // Jika data user tidak ada maka show 404
        if (!$kgb) show_404();    

        $data['pageTitle'] = 'Cetak SK KGB';
        $data['kgb'] = $kgb;       
        $data['config'] = $config;
        $html = $this->load->view('cetak_kgb', $data, TRUE);

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->AddPage('P');
		$mpdf->WriteHTML($html);
		$mpdf->Output();
    }
}