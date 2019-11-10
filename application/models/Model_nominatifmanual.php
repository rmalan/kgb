<?php
class Model_nominatifmanual extends CI_Model
{
	public function get()
	{
		$this->db->select('*');
        $this->db->from('ref_asn');        
        $this->db->order_by('asn_nip', 'ASC');
        $query = $this->db->get();

        return $query;
	}

    public function getByOpd()
    {
        $skpd = $this->session->userdata('skpd');

        $this->db->select('*');
        $this->db->from('ref_asn');
        $this->db->where('asn_skpd', $skpd);
        $this->db->order_by('asn_nip', 'ASC');
        $query = $this->db->get();

        return $query;
    }

    function getAsn($nip){
		$this->db->select('*');
		$this->db->from('ref_asn');
		$this->db->join('ref_skpd', 'ref_asn.asn_skpd = ref_skpd.skpd_kd_skpd');
		$this->db->where('asn_nip', $nip);
		$query = $this->db->get();

		if($query->num_rows()>0){
			foreach ($query->result() as $data) {
				$hasil=array(
					'nip' => $data->asn_nip,
					'nama' => $data->asn_nama,
					'pangol' => $data->asn_gol_akhir,
					'skpd' => $data->skpd_nama,
					);
			}
		}
		return $hasil;
	}

	public function insert($data)
    {
        // Jalankan query
        $query = $this->db->insert('ref_riwayat_kgb', $data);

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
		->get('ref_asn');

		// Return hasil query
		return $query;
	}
	
	public function update($id, $data)
	{
		// Jalankan query
		$query = $this->db
		->where('riwayatkgb_id', $id)
		->update('ref_riwayat_kgb', $data);
		
		// Return hasil query
		return $query;
	}
}