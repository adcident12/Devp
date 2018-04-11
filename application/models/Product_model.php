<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {
    public function gets()
    {
        $this->db->from('Product');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_by_id($Pro_id)
    {
        $this->db->where('Pro_id', $Pro_id);
        $this->db->from('Product');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function insert($array)
    {
        return $this->db->insert('Product',$array);

    }
    public function delete($Pro_id)
    {
        $this->db->where('Pro_id',$Pro_id);
        return $this->db->delete('Product');   
    }
    public function update($Pro_id, $array)
    {
        $this->db->where('Pro_id',$Pro_id);
        return $this->db->update('Product',$array);   
    }
  
}