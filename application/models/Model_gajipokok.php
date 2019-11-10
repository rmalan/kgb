<?php
class Model_gajipokok extends CI_Model {
    
    public $table = 'ref_gaji';

    public function get()
    {
        // Jalankan query
        $query = $this->db->get($this->table);
 
        // Return hasil query
        return $query;
    }

    public function update($id, $data)
    {
        // Jalankan query
        $query = $this->db
        ->where('gaji_id', $id)
        ->update($this->table, $data);
        
        // Return hasil query
        return $query;
    }
}