<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Gaji_pokok extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
        $this->isOpeOrOpd();
        $this->load->model('Model_gajipokok');
    }

    public function index()
    {
        if ($this->input->post('submit')) {
            $id = $this->input->post('id');
            $data = array(                                                
                'gaji_pokok'   => $this->input->post('gaji_pokok'),                
            );
        
            // Jalankan function update pada model
            $query = $this->Model_gajipokok->update($id, $data);

            // cek jika query berhasil
            if ($query) $message = array('status' => true, 'message' => 'Gaji pokok telah diperbaharui');
            else $message = array('status' => true, 'message' => 'Gaji pokok gagal diperbaharui');
        
            // simpan message sebagai session
            $this->session->set_flashdata('message', $message);

            // refresh page
            redirect('gaji-pokok');
        }

        $data['pageTitle'] = 'Gaji Pokok';
        $data['gajiPokok'] = $this->Model_gajipokok->get()->result();
        $data['pageContent'] = $this->load->view('gaji_pokok', $data, TRUE);

        $this->load->view('template/layout', $data);
    }    
}