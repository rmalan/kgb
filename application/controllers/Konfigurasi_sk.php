<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi_sk extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
        $this->isOpeOrOpd();
        $this->load->model('Model_konfigurasisk');        
    }

    public function index()
    {
        $data['pageTitle'] = 'Konfigurasi SK';
        $data['config'] = $this->Model_konfigurasisk->get()->result();
        $data['config_opd'] = $this->Model_konfigurasisk->getByOpd()->result();
        $data['pageContent'] = $this->load->view('konfigurasi_sk', $data, TRUE);     
           
        $this->load->view('template/layout', $data);
    }

    public function tambah()
    {
        if ($this->input->post('submit')) {
            if($this->session->userdata('level') === '11') {                
                if (!empty($_FILES['logo']['name'])) {
                    // Konfigurasi library upload codeigniter
                    $config['upload_path'] = './assets/images/logo';
                    $config['allowed_types'] = 'gif|jpg|jpeg|png';
                    $config['max_size'] = 2000;
                    $config['file_name'] = 'logo_'.$this->input->post('kode_skpd').'_'.date('YmdHis');
                
                    // Load library upload
                    $this->load->library('upload', $config);
                    
                    // Jika terdapat error pada proses upload maka exit
                    if (!$this->upload->do_upload('logo')) {
                        exit($this->upload->display_errors());
                    }
                    else
                    {
                        $logo = $this->upload->data()['file_name'];
                    }                                                        
                }
                else
                {
                    $logo = 'bengkulu_coa.png';
                }

                $data = array(                
                    'config_id'         => $this->input->post(''),                
                    'config_logo'       => $logo,
                    'config_kop_atas'   => $this->input->post('kop_atas'),
                    'config_kop_bawah'  => $this->input->post('kop_bawah'),
                    'config_alamat'     => $this->input->post('alamat'),
                    'config_telp'       => $this->input->post('telp'),
                    'config_web'        => $this->input->post('web'),
                    'config_email'      => $this->input->post('email'),
                    'config_ttd_satu'   => $this->input->post('ttd_satu'),
                    'config_ttd_dua'    => $this->input->post('ttd_dua'),
                    'config_nip_pejabat'=> $this->input->post('nip'),
                    'config_skpd'       => $this->input->post('kode_skpd')
                );
            }

            if($this->session->userdata('level') === '7') {
                if (!empty($_FILES['logo']['name'])) {
                    // Konfigurasi library upload codeigniter
                    $config['upload_path'] = './assets/images/logo';
                    $config['allowed_types'] = 'gif|jpg|jpeg|png';
                    $config['max_size'] = 2000;
                    $config['file_name'] = 'logo_'.$this->input->post('kode_skpd').'_'.date('YmdHis');
                
                    // Load library upload
                    $this->load->library('upload', $config);
                    
                    // Jika terdapat error pada proses upload maka exit
                    if (!$this->upload->do_upload('logo')) {
                        exit($this->upload->display_errors());
                    }
                    else
                    {
                        $logo = $this->upload->data()['file_name'];
                    }                                                        
                }
                else
                {
                    $logo = 'bengkulu_coa.png';
                }

                $data = array(                
                    'config_id'         => $this->input->post(''),                
                    'config_logo'       => $logo,
                    'config_kop_atas'   => $this->input->post('kop_atas'),
                    'config_kop_bawah'  => $this->input->post('kop_bawah'),
                    'config_alamat'     => $this->input->post('alamat'),
                    'config_telp'       => $this->input->post('telp'),
                    'config_web'        => $this->input->post('web'),
                    'config_email'      => $this->input->post('email'),
                    'config_ttd_satu'   => $this->input->post('ttd_satu'),
                    'config_ttd_dua'    => $this->input->post('ttd_dua'),
                    'config_nip_pejabat'=> $this->input->post('nip'),
                    'config_skpd'       => $this->session->userdata('skpd')                
                );
            }
            
            // Jalankan function insert pada model
            $query = $this->Model_konfigurasisk->insert($data);

            // cek jika query berhasil
            if ($query) $message = array('status' => true, 'message' => 'Konfigurasi telah ditambahkan');
            else $message = array('status' => true, 'message' => 'Konfigurasi gagal ditambahkan');
        
            // simpan message sebagai session
            $this->session->set_flashdata('message', $message);

            // refresh page
            redirect('konfigurasi-sk', 'refresh');
        }

        $data['pageTitle'] = 'Konfigurasi SK';     
        $data['kodeSkpd']  = $this->Model_konfigurasisk->get_skpd()->result();
        $data['pageContent'] = $this->load->view('konfigurasisk_tambah', $data, TRUE);

        $this->load->view('template/layout', $data);
    }

    public function ubah($id = null)
    {
        if ($this->input->post('submit')) {
            if (!empty($_FILES['logo']['name'])) {
                // Konfigurasi library upload codeigniter
                $config['upload_path'] = './assets/images/logo';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = 2000;
                $config['file_name'] = 'logo_'.$this->input->post('kode_skpd').'_'.date('YmdHis');
            
                // Load library upload
                $this->load->library('upload', $config);
                
                // Jika terdapat error pada proses upload maka exit
                if (!$this->upload->do_upload('logo')) {
                    exit($this->upload->display_errors());
                }
                else
                {
                    $logo = $this->upload->data()['file_name'];
                }                                                        
            }
            else
            {
                $logo = $this->input->post('logo_lama');
            }

            $data = array(                                            
                'config_logo'       => $logo,
                'config_kop_atas'   => $this->input->post('kop_atas'),
                'config_kop_bawah'  => $this->input->post('kop_bawah'),
                'config_alamat'     => $this->input->post('alamat'),
                'config_telp'       => $this->input->post('telp'),
                'config_web'        => $this->input->post('web'),
                'config_email'      => $this->input->post('email'),                
                'config_ttd_satu'   => $this->input->post('ttd_satu'),
                'config_ttd_dua'    => $this->input->post('ttd_dua'),
                'config_nip_pejabat'=> $this->input->post('nip'),
            );
        
            // Jalankan function update pada model
            $id = $this->input->post('id');
            $query = $this->Model_konfigurasisk->update($id, $data);

            // cek jika query berhasil
            if ($query) $message = array('status' => true, 'message' => 'Konfigurasi telah diperbaharui');
            else $message = array('status' => true, 'message' => 'Konfigurasi gagal diperbaharui');
        
            // simpan message sebagai session
            $this->session->set_flashdata('message', $message);

            // refresh page
            redirect('konfigurasi-sk');
        }

        // Ambil data user dari database
        $config = $this->Model_konfigurasisk->get_where(array('config_id' => $id))->row();
    
        // Jika data user tidak ada maka show 404
        if (!$config) show_404();        
            
        $data['pageTitle'] = 'Konfigurasi SK';
        $data['config'] = $config;
        $data['pageContent'] = $this->load->view('konfigurasisk_ubah', $data, TRUE);

        $this->load->view('template/layout', $data);
    }

    public function pratinjau($id = null)
    {        
        // Ambil data user dari database
        $config = $this->Model_konfigurasisk->get_where(array('config_id' => $id))->row();
    
        // Jika data user tidak ada maka show 404
        if (!$config) show_404();   

        $data['pageTitle'] = 'Pratinjau Cetak';
        $data['config'] = $config;        
        $html = $this->load->view('pratinjau_cetak', $data, TRUE);                

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->AddPage('P');
		$mpdf->WriteHTML($html);
		$mpdf->Output();
    }

    public function hapus($id = null)
    {
        $config = $this->Model_konfigurasisk->get_where(array('config_id' => $id))->row();
            
        if (!$config) show_404();
            
        $query = $this->Model_konfigurasisk->delete($id);
    
        // cek jika query berhasil
        if ($query) $message = array('status' => true, 'message' => 'Konfigurasi telah dihapus');
        else $message = array('status' => true, 'message' => 'Konfigurasi gagal dihapus');
    
        // simpan message sebagai session
        $this->session->set_flashdata('message', $message);

        redirect('konfigurasi-sk', 'refresh');
    }    

    function getPejabat(){
		$skpd = $this->input->post('kodeskpd');
		$data = $this->Model_konfigurasisk->getPejabat($skpd);
		echo json_encode($data);
    }
    
    function cariPejabat(){
        $skpd = $this->input->post('kodeskpd');
        $data = $this->Model_konfigurasisk->cariPejabat($skpd);
        if($data->num_rows()>0){
            $data = $data->row_array();
            echo $data['skpd_nip_kepala'];
            //echo $row['asn_nama'];
        }
    }
}