<?php
class Model_dashboard extends CI_Model {
    public function get_asn()
    {
        $this->db->select('*');
        $this->db->from('ref_asn');
        $this->db->join('ref_pangkat', 'ref_asn.asn_gol_akhir = ref_pangkat.pangkat_ruang');
        $this->db->join('ref_skpd', 'ref_asn.asn_skpd = ref_skpd.skpd_kd_skpd');
        $this->db->order_by('asn_nama', 'ASN');
        $query = $this->db->get();
        
        return $query;
    }

    public function count_asn()
    {
        $query = $this->db->count_all_results('ref_asn');
        return $query;
    }

    public function get_dnominatif()
    { 
      $kosong = '';
      // Variabel Tangal Penentuan Nominatif
      date_default_timezone_set("Asia/Jakarta");           
      $skrg = date("Y-m-d");                             
      $date=date_create("$skrg");
      date_sub($date,date_interval_create_from_date_string("2 year"));
      $nominatif = date_format($date,"Y-m-d");
      $nominatifTahun = date_format($date,"Y");
      
      // Jalankan query
      $this->db->select('*');
      $this->db->from('ref_asn');
      $this->db->join('ref_riwayat_kgb', 'ref_asn.asn_nip = ref_riwayat_kgb.riwayatkgb_nip');
      $this->db->join('ref_pangkat', 'ref_asn.asn_gol_akhir = ref_pangkat.pangkat_ruang');
      $this->db->join('ref_skpd', 'ref_asn.asn_skpd = ref_skpd.skpd_kd_skpd');
      $this->db->where_not_in('riwayatkgb_status', "Selesai");
      $this->db->where('riwayatkgb_tmt <=', $nominatif);
      $this->db->or_where_not_in('riwayatkgb_status', "Selesai");
      $this->db->like('riwayatkgb_tmt', $nominatifTahun, 'after');
      /* $this->db->where('riwayatkgb_status', NULL);      
      $this->db->like('riwayatkgb_tmt', $nominatif, 'after');
      $this->db->or_where('riwayatkgb_status', $kosong);
      $this->db->like('riwayatkgb_tmt', $nominatif, 'after');
      $this->db->or_where('riwayatkgb_status', 'Manual');
      $this->db->order_by('riwayatkgb_tmt', 'ASC'); */
      $query = $this->db->count_all_results();      

      // Return hasil query
      return $query;
    }

    public function get_nominatift()
    { 
      $kosong = '';
      // Variabel Tangal Penentuan Nominatif
      date_default_timezone_set("Asia/Jakarta");           
      $skrg = date("Y-m-d");                             
      $date=date_create("$skrg");
      date_sub($date,date_interval_create_from_date_string("2 year"));
      $nominatif = date_format($date,"Y");
      
      // Jalankan query
      $this->db->select('*');
      $this->db->from('ref_asn');
      $this->db->join('ref_riwayat_kgb', 'ref_asn.asn_nip = ref_riwayat_kgb.riwayatkgb_nip');
      $this->db->join('ref_pangkat', 'ref_asn.asn_gol_akhir = ref_pangkat.pangkat_ruang');
      $this->db->join('ref_skpd', 'ref_asn.asn_skpd = ref_skpd.skpd_kd_skpd');
      $this->db->where('riwayatkgb_status', 'Tertunda');
      $this->db->like('riwayatkgb_tmt', $nominatif, 'after');      
      $this->db->order_by('riwayatkgb_tmt', 'ASC');
      $query = $this->db->count_all_results();      

      // Return hasil query
      return $query;
    }

    public function get_asnOpd()
    {
        $skpd = $this->session->userdata('skpd');

        $this->db->select('*');
        $this->db->where('asn_skpd', $skpd);
        $this->db->from('ref_asn');
        $this->db->join('ref_pangkat', 'ref_asn.asn_gol_akhir = ref_pangkat.pangkat_ruang');
        $this->db->join('ref_skpd', 'ref_asn.asn_skpd = ref_skpd.skpd_kd_skpd');                
        $this->db->order_by('asn_nama', 'ASC');
        $query = $this->db->get();

        return $query;
    }

    public function count_asnOpd()
    {
        $skpd = $this->session->userdata('skpd');

        $this->db->where('asn_skpd', $skpd);
        $this->db->from('ref_asn');

        $query = $this->db->count_all_results();
        return $query;
    }

    public function get_dnominatifOpd()
    { 
      $kosong = '';
      $skpd = $this->session->userdata('skpd');
      // Variabel Tangal Penentuan Nominatif
      date_default_timezone_set("Asia/Jakarta");           
      $skrg = date("Y-m-d");                             
      $date=date_create("$skrg");
      date_sub($date,date_interval_create_from_date_string("2 year"));
      $nominatif = date_format($date,"Y-m-d");      
      $nominatifTahun = date_format($date,"Y");
      
      // Jalankan query
      $this->db->select('*');
      $this->db->from('ref_asn');
      $this->db->join('ref_riwayat_kgb', 'ref_asn.asn_nip = ref_riwayat_kgb.riwayatkgb_nip');
      $this->db->join('ref_pangkat', 'ref_asn.asn_gol_akhir = ref_pangkat.pangkat_ruang');
      $this->db->join('ref_skpd', 'ref_asn.asn_skpd = ref_skpd.skpd_kd_skpd');
      $this->db->where('asn_skpd', $skpd);
      $this->db->where_not_in('riwayatkgb_status', "Selesai");
      $this->db->where('riwayatkgb_tmt <=', $nominatif);
      $this->db->or_where('asn_skpd', $skpd);
      $this->db->where_not_in('riwayatkgb_status', "Selesai");
      $this->db->like('riwayatkgb_tmt', $nominatifTahun, 'after');
      /* $this->db->where('riwayatkgb_status', NULL);
      $this->db->like('riwayatkgb_tmt', $nominatif, 'after');
      $this->db->or_where('asn_skpd', $skpd);
      $this->db->where('riwayatkgb_status', $kosong);
      $this->db->like('riwayatkgb_tmt', $nominatif, 'after');      
      $this->db->or_where('asn_skpd', $skpd);
      $this->db->where('riwayatkgb_status', 'Manual');
      $this->db->order_by('riwayatkgb_tmt', 'ASC'); */
      $query = $this->db->count_all_results();      

      // Return hasil query
      return $query;
    }

    public function get_nominatiftOpd()
    { 
      $kosong = '';
      $skpd = $this->session->userdata('skpd');
      // Variabel Tangal Penentuan Nominatif
      date_default_timezone_set("Asia/Jakarta");           
      $skrg = date("Y-m-d");                             
      $date=date_create("$skrg");
      date_sub($date,date_interval_create_from_date_string("2 year"));
      $nominatif = date_format($date,"Y");      
      
      // Jalankan query
      $this->db->select('*');
      $this->db->from('ref_asn');
      $this->db->join('ref_riwayat_kgb', 'ref_asn.asn_nip = ref_riwayat_kgb.riwayatkgb_nip');
      $this->db->join('ref_pangkat', 'ref_asn.asn_gol_akhir = ref_pangkat.pangkat_ruang');
      $this->db->join('ref_skpd', 'ref_asn.asn_skpd = ref_skpd.skpd_kd_skpd');
      $this->db->where('asn_skpd', $skpd);
      $this->db->where('riwayatkgb_status', 'Tertunda');
      $this->db->like('riwayatkgb_tmt', $nominatif, 'after');            
      $this->db->order_by('riwayatkgb_tmt', 'ASC');
      $query = $this->db->count_all_results();      

      // Return hasil query
      return $query;
    }
}