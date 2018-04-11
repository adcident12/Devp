<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {
    public function gets()
    {
        $this->db->from('Customer');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_by_id($Cus_id)
    {
        $this->db->where('Cus_id', $Cus_id);
        $this->db->from('Customer');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_by_name($Cus_CopName)
    {
        $this->db->where('Cus_CopName', $Cus_CopName);
        $this->db->from('Customer');
        $query = $this->db->get();
        return $query->result_array();
        $str = $this->db->last_query();
    }
    public function insert($array)
    {
        return $this->db->insert('Customer',$array);

    }
    public function delete($Cus_id)
    {
        $this->db->where('Cus_id',$Cus_id);
        return $this->db->delete('Customer');   
    }
    public function update($Cus_id, $array)
    {
        $this->db->where('Cus_id',$Cus_id);
        return $this->db->update('Customer',$array);   
    }
  
}