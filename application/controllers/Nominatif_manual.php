<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Nominatif_manual extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
        $this->isOpeOrOpd();   
        $this->load->model('Model_nominatifmanual');
        $this->load->model('Model_riwayatproses');
    }

    public function index()
    {
        date_default_timezone_set("Asia/Jakarta");           
        $skrg = date("Y-m-d");

        if ($this->input->post('submit')) {
            $data = array(                
                'riwayatkgb_id'         => $this->input->post(''),
                'riwayatkgb_id_sblm'    => 0,
                'riwayatkgb_nip'        => $this->input->post('nip'),
                'riwayatkgb_gaji_lama'  => $this->input->post('gaji_lama'),
                'riwayatkgb_gaji_baru'  => $this->input->post('gaji_baru'),
                'riwayatkgb_masa_kerja' => $this->input->post('masa_kerja'),
                'riwayatkgb_tmt'        => $this->input->post('tmt'),
                'riwayatkgb_surat'      => $this->input->post('surat'),
                'riwayatkgb_no_surat'   => $this->input->post('no_surat'),
                'riwayatkgb_tgl_surat'  => $this->input->post('tgl_surat'),    
                'riwayatkgb_status'     => 'Manual'
            );

             // Jalankan function insert pada model
             $query = $this->Model_nominatifmanual->insert($data);

             // cek jika query berhasil
             if ($query) $message = array('status' => true, 'message' => 'Pegawai telah ditambahkan ke daftar nominatif');
             else $message = array('status' => true, 'message' => 'Pegawai gagal ditambahkan ke daftar nominatif');
         
             // simpan message sebagai session
             $this->session->set_flashdata('message', $message);
 
             // refresh page
             redirect('nominatif-manual', 'refresh');
        }

        $data['pageTitle'] = 'Nominatif Manual';
        $data['nominatifmanual'] = $this->Model_nominatifmanual->get()->result();        
        $data['nominatifmanual_opd'] = $this->Model_nominatifmanual->getByOpd()->result();        
        $data['pageContent'] = $this->load->view('nominatif_manual', $data, TRUE);

        $this->load->view('template/layout', $data);        
    }

    function pegawai ($id = null)
    {
        if ($this->input->post('submit')) {
            $data = array(                 
                'riwayatkgb_status'     => 'Manual'
            );
        
            // Jalankan function insert pada model
            $query = $this->Model_nominatifmanual->update($id, $data);

            // cek jika query berhasil
            if ($query) $message = array('status' => true, 'message' => 'Pegawai telah ditambahkan ke daftar nominatif');
            else $message = array('status' => true, 'message' => 'Pegawai gagal ditambahkan ke daftar nominatif');
        
            // simpan message sebagai session
            $this->session->set_flashdata('message', $message);

            // refresh page
            redirect('riwayat-kgb');
        }
        // Ambil data dari database
        $kgb = $this->Model_nominatifmanual->get_where(array('riwayatkgb_id' => $id))->row();        
    
        // Jika data user tidak ada maka show 404
        if (!$kgb) show_404();    

        $data['pageTitle'] = 'Nominatif Manual';
        $data['row'] = $kgb;
        $data['pageContent'] = $this->load->view('nominatifmanual_pegawai', $data, TRUE);

        $this->load->view('template/layout', $data);   
    }

    function getAsn(){
		$nip = $this->input->post('nip');
		$data = $this->Model_nominatifmanual->getAsn($nip);
		echo json_encode($data);
	}
}