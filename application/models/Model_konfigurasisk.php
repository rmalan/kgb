<?php
class Model_konfigurasisk extends CI_Model {
    public $table = 'ref_config';
    public $tableskpd = 'ref_skpd';    

    public function get_skpd()
    {
        $query = $this->db->get($this->tableskpd);

        return $query;
    }

    public function get()
    {
        $this->db->select('*');
        $this->db->from('ref_config');
        $this->db->join('ref_skpd', 'ref_config.config_skpd = ref_skpd.skpd_kd_skpd');
        $query = $this->db->get();

        return $query;
    }

    public function getByOpd()
    {
        $skpd = $this->session->userdata('skpd');
        $this->db->select('*');
        $this->db->from('ref_config');
        $this->db->join('ref_skpd', 'ref_config.config_skpd = ref_skpd.skpd_kd_skpd');
        $this->db->where('config_skpd', $skpd);
        $query = $this->db->get();

        return $query;
    }

    public function get_where($where)
    {
        // Jalankan query
        $query = $this->db
            ->join('ref_asn', 'ref_config.config_nip_pejabat = ref_asn.asn_nip')
            ->join('ref_pangkat', 'ref_asn.asn_gol_akhir = ref_pangkat.pangkat_ruang')
            ->where($where)
            ->get($this->table);

        // Return hasil query
        return $query;
    }

    public function insert($data)
    {
        // Jalankan query
        $query = $this->db->insert($this->table, $data);

        // Return hasil query
        return $query;
    }

    public function update($id, $data)
    {
        // Jalankan query
        $query = $this->db
        ->where('config_id', $id)
        ->update($this->table, $data);
        
        // Return hasil query
        return $query;
    }

    public function delete($id)
    {
      // Jalankan query
      $query = $this->db
        ->where('config_id', $id)
        ->delete($this->table);
      
      // Return hasil query
      return $query;
    }  

    function getPejabat($skpd){
		$this->db->select('*');
        $this->db->from('ref_skpd');		
        $this->db->join('ref_asn', 'ref_skpd.skpd_nip_kepala = ref_asn.asn_nip');
		$this->db->where('skpd_kd_skpd', $skpd);
		$query = $this->db->get();

		if($query->num_rows()>0){
			foreach ($query->result() as $data) {
				$hasil=array(
					'kodeskpd' => $data->skpd_kd_skpd,
					'namaskpd' => "KEPALA ".$data->skpd_nama,
                    'nipkepala' => $data->skpd_nip_kepala,		
                    'namapejabat' => $data->asn_nama,
				);
			}
		}
		return $hasil;
    }
    
    function cariPejabat($skpd){
        $this->db->select('*');
        $this->db->from('ref_skpd');
        //$this->db->join('ref_asn', 'ref_skpd.skpd_nip_kepala = ref_asn.asn_nip');
        $this->db->where("skpd_kd_skpd", $skpd);        
        $query = $this->db->get();

        return $query;
    }
}
