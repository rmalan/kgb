<?php
class Model_riwayatkgb extends CI_Model {    
    public function get()
    {
      // Jalankan query
      $this->db->select('*');
      $this->db->select_max('riwayatkgb_id');
      $this->db->select_max('riwayatkgb_tmt');
      $this->db->from('ref_asn');
      $this->db->join('ref_riwayat_kgb', 'ref_asn.asn_nip = ref_riwayat_kgb.riwayatkgb_nip');
      $this->db->join('ref_pangkat', 'ref_asn.asn_gol_akhir = ref_pangkat.pangkat_ruang');
      $this->db->join('ref_skpd', 'ref_asn.asn_skpd = ref_skpd.skpd_kd_skpd');           
      $this->db->group_by('riwayatkgb_nip');
      $this->db->order_by('riwayatkgb_tmt', 'DESC');      
      $query = $this->db->get();
 
      // Return hasil query
      return $query;
    }    

    public function getByOpd()
    {
      $skpd = $this->session->userdata('skpd');
      // Jalankan query
      $this->db->select('*');
      $this->db->select_max('riwayatkgb_id');
      $this->db->select_max('riwayatkgb_tmt');
      $this->db->from('ref_asn');      
      $this->db->join('ref_riwayat_kgb', 'ref_asn.asn_nip = ref_riwayat_kgb.riwayatkgb_nip');
      $this->db->join('ref_pangkat', 'ref_asn.asn_gol_akhir = ref_pangkat.pangkat_ruang');
      $this->db->join('ref_skpd', 'ref_asn.asn_skpd = ref_skpd.skpd_kd_skpd');      
      $this->db->where('asn_skpd', $skpd);      
      $this->db->group_by('riwayatkgb_nip');
      $this->db->order_by('asn_nama', 'ASC');
      $query = $this->db->get();
 
      // Return hasil query
      return $query;
    }   

    public function get_where($where)
    {
      // Jalankan query
      $query = $this->db            
          ->join('ref_riwayat_kgb', 'ref_asn.asn_nip = ref_riwayat_kgb.riwayatkgb_nip')
          ->join('ref_pangkat', 'ref_asn.asn_gol_akhir = ref_pangkat.pangkat_ruang')   
          ->join('ref_skpd', 'ref_asn.asn_skpd = ref_skpd.skpd_kd_skpd')         
          ->where($where)
          ->order_by('riwayatkgb_id', 'DESC')
          ->get('ref_asn');

      // Return hasil query
      return $query;
    }

    public function getByPegawai()
    {
      $nip = $this->session->userdata('nip');
      // Jalankan query
      $this->db->select('*');
      $this->db->from('ref_asn');      
      $this->db->join('ref_riwayat_kgb', 'ref_asn.asn_nip = ref_riwayat_kgb.riwayatkgb_nip');
      $this->db->join('ref_pangkat', 'ref_asn.asn_gol_akhir = ref_pangkat.pangkat_ruang');
      $this->db->join('ref_skpd', 'ref_asn.asn_skpd = ref_skpd.skpd_kd_skpd');      
      $this->db->where('asn_nip', $nip);      
      $query = $this->db->get();
 
      // Return hasil query
      return $query;
    }
}