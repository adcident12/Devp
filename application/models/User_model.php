<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    public function gets()
    {
        $this->db->from('User');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_by_id($User_id)
    {
        $this->db->where('User_id', $User_id);
        $this->db->from('User');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_by_name($User_name)
    {
        $this->db->where('User_name', $User_name);
        $this->db->from('User');
        $query = $this->db->get();
        return $query->result_array();
    }

}