<?php
class Model_naikgaji extends CI_Model {
 
 public $table = 'ref_asn';
 public $tableconfig = 'ref_config';
 public $tablekgb = 'ref_riwayat_kgb';
 public $tablegaji = 'ref_gaji';

 public function get()
  {
    // Jalankan query
    $query = $this->db->get($this->table);

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
      ->get($this->table);

    // Return hasil query
    return $query;
  }

  public function get_config($where)
  {
    // Jalankan query
    $query = $this->db      
      ->join('ref_asn', 'ref_config.config_nip_pejabat = ref_asn.asn_nip')
      ->join('ref_pangkat', 'ref_asn.asn_gol_akhir = ref_pangkat.pangkat_ruang')
      ->where($where)
      ->get($this->tableconfig);

    // Return hasil query
    return $query;
  }

  public function get_gaji($where)
  {
    $query = $this->db
      ->where($where)
      ->get($this->tablegaji);

    return $query;
  }

  public function insert($data)
  {
    // Jalankan query
    $query = $this->db->insert($this->tablekgb, $data);

    // Return hasil query
    return $query;
  }

  public function update($id, $data)
  {
    // Jalankan query
    $query = $this->db
      ->where('riwayatkgb_id', $id)
      ->update($this->tablekgb, $data);
    
    // Return hasil query
    return $query;
  }
}