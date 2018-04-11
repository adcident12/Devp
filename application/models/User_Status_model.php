<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Status_model extends CI_Model {
    public function gets()
    {
        $this->db->from('Staff_Status');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_by_id($Status_id)
    {
        $this->db->where('Status_id', $Status_id);
        $this->db->from('Staff_Status');
        $query = $this->db->get();
        return $query->result_array();
    }

}