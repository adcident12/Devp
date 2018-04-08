<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_detail_model extends CI_Model {
    public function gets()
    {
        $this->db->from('User_Detail');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_by_id($User_Detail_id)
    {
        $this->db->where('User_Detail_id', $User_Detail_id);
        $this->db->from('User_Detail');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_by_tax($User_Detail_num_tax)
    {
        $this->db->where('User_Detail_num_tax', $User_Detail_num_tax);
        $this->db->from('User_Detail');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function insert($array)
    {
        return $this->db->insert('User_Detail',$array);

    }

}