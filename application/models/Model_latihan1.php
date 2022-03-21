<?php
class Model_latihan1 extends CI_Model {
    public function get_data()
    {
        $query = $this->db->get('latihan1');
        return $query->result();
    }
}
