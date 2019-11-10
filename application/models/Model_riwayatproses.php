<?php
class Model_riwayatproses extends CI_Model {
    public function get()
    {
        $this->db->select('*');
        $this->db->from('ref_riwayatkgb_proses');
        $this->db->join('ref_riwayat_proses', 'ref_riwayatkgb_proses.kgbproses_nama = ref_riwayat_proses.riwayatproses_id');
        $this->db->join('ref_asn', 'ref_riwayatkgb_proses.kgbproses_nip = ref_asn.asn_nip');
        $this->db->order_by('kgbproses_id', 'DESC');
        $query = $this->db->get();

        return $query;
    }

    public function get_where($where)
    {
        // Jalankan query
        $query = $this->db            
            ->join('ref_riwayat_proses', 'ref_riwayatkgb_proses.kgbproses_nama = ref_riwayat_proses.riwayatproses_id')
            ->join('ref_asn', 'ref_riwayatkgb_proses.kgbproses_nip = ref_asn.asn_nip')            
            ->where($where)
            ->order_by('kgbproses_id', 'DESC')
            ->get('ref_riwayatkgb_proses');

        // Return hasil query
        return $query;
    }

    public function insert($data)
    {        
        $query = $this->db->insert('ref_riwayatkgb_proses', $data);        
        return $query;
    }
}