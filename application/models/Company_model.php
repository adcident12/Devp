<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_model extends CI_Model {
    public function gets()
    {
        $this->db->from('Company');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_by_id($Company_id)
    {
        $this->db->where('Company_id', $Company_id);
        $this->db->from('Company');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_by_name($Company_name)
    {
        $this->db->where('Company_name', $Company_name);
        $this->db->from('Company');
        $query = $this->db->get();
        return $query->result_array();
        $str = $this->db->last_query();
    }
    public function insert($array)
    {
        return $this->db->insert('Company',$array);

    }
    public function delete($Company_id)
    {
        $this->db->where('Company_id',$Company_id);
        return $this->db->delete('Company');   
    }
    public function update($Company_id, $array)
    {
        $this->db->where('Company_id',$Company_id);
        return $this->db->update('Company',$array);   
    }
  
}