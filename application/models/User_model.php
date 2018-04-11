<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    public function gets()
    {
        $this->db->from('Staff');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_by_id($Staff_id)
    {
        $this->db->where('Staff_id', $Staff_id);
        $this->db->from('Staff');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_by_user($Staff_user)
    {
        $this->db->where('Staff_user', $Staff_user);
        $this->db->from('Staff');
        $query = $this->db->get();
        return $query->result_array();
    }

}