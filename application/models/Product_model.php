<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {
    public function gets()
    {
        $this->db->from('Product');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_by_id($Product_id)
    {
        $this->db->where('Product_id', $Product_id);
        $this->db->from('Product');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function insert($array)
    {
        return $this->db->insert('Product',$array);

    }
    public function delete($Product_id)
    {
        $this->db->where('Product_id',$Product_id);
        return $this->db->delete('Product');   
    }
    public function update($Product_id, $array)
    {
        $this->db->where('Product_id',$Product_id);
        return $this->db->update('Product',$array);   
    }
  
}