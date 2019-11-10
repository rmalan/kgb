<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function cekAkun()
    {
        // Memanggil model users
        $this->load->model('Model_users');

        // Mengambil data dari form login dengan method POST
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));

        // Jalankan function cekAkun pada model_users
        $query = $this->Model_users->cekAkun($username, $password);
        
        // Jika query gagal maka return false
        if (!$query) {
        
        // Mengatur pesan error validasi data
        $this->form_validation->set_message('cekAkun', 'Nama Pengguna atau Kata Sandi yang Anda masukkan salah!');
        return FALSE;
        
        // Jika berhasil maka set user session dan return true
        } else {

        // data user dalam bentuk array
        $userData = array(
            'username' => $query->username,
            'level' => $query->id_group,
            'nama' => $query->first_name,            
            'nama_belakang' => $query->last_name,
            'nip' => $query->asn_nip,
            'skpd' => $query->skpd_kd_skpd,
            'logged_in' => TRUE
        );
                
        // set session untuk user
        $this->session->set_userdata($userData);

        return TRUE;
        }
    }

    public function login()
    {
        // Jika user telah login, redirect ke base_url
        if ($this->session->userdata('logged_in')) redirect('dashboard');

        // Jika form di submit jalankan blok kode ini
        if ($this->input->post('submit')) {
        
        // Mengatur validasi data username,
        // required = tidak boleh kosong
        $this->form_validation->set_rules('username', 'Username', 'required');

        // Mengatur validasi data password,
        // required = tidak boleh kosong
        // callback_cekAkun = menjalankan function cekAkun()
        $this->form_validation->set_rules('password', 'Password', 'required|callback_cekAkun');
                
        // Mengatur pesan error validasi data
        $this->form_validation->set_message('required', '%s tidak boleh kosong!');

        // Jalankan validasi jika semuanya benar maka redirect ke controller dashboard
        if ($this->form_validation->run() === TRUE) {
            redirect('dashboard');
        } 
        }
        
        // Jalankan view auth/login.php
        $this->load->view('login');
    }

    public function logout()
    {
        // Hapus semua data pada session
        $this->session->sess_destroy();

        // redirect ke halaman login	
        redirect('auth/login');
    }
}