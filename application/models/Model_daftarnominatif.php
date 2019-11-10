<?php
class Model_daftarnominatif extends CI_Model {  

    public function get()
    { 
      $kosong = '';
      // Variabel Tangal Penentuan Nominatif
      date_default_timezone_set("Asia/Jakarta");           
      $skrg = date("Y-m-d");                             
      $date=date_create("$skrg");
      date_sub($date,date_interval_create_from_date_string("2 year"));
      $nominatif = date_format($date,"Y-m-d");
      $nominatifTahun = date_format($date,"Y");
      // $nominatif = date_format($date,"Y-m-d");
      
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
      // $this->db->where('riwayatkgb_tmt >=', $nominatif);
      // $this->db->where('riwayatkgb_tmt <=', $skrg); */
      $this->db->order_by('riwayatkgb_tmt', 'DESC');
      $query = $this->db->get();      

      /* Query Success
      $query = $this->db->query('select * from ref_asn join ref_riwayat_kgb on ref_asn.asn_nip = ref_riwayat_kgb.riwayatkgb_nip join ref_pangkat on ref_asn.asn_gol_akhir = ref_pangkat.pangkat_ruang join ref_skpd on ref_asn.asn_skpd = ref_skpd.skpd_kd_skpd where riwayatkgb_tmt >= date_sub(current_date(), interval 2 year) and riwayatkgb_tmt <= current_date()');
      */

      
      // Return hasil query
      return $query;
    }

    public function getByOpd()
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
      // $nominatif = date_format($date,"Y-m-d");
      
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
      $this->db->where('riwayatkgb_status', 'Manual'); */
      $this->db->order_by('riwayatkgb_tmt', 'ASC');
      $query = $this->db->get();     

      return $query;
    }
}