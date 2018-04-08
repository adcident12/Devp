<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Status_model extends CI_Model {
    public function gets()
    {
        $this->db->from('User_Status');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_by_id($User_Status_id)
    {
        $this->db->where('User_Status_id', $User_Status_id);
        $this->db->from('User_Status');
        $query = $this->db->get();
        return $query->result_array();
    }

}