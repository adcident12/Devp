<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {
    public function gets()
    {
        $this->db->from('Customer');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_by_id($Customer_id)
    {
        $this->db->where('Customer_id', $Customer_id);
        $this->db->from('Customer');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function insert($array)
    {
        return $this->db->insert('Customer',$array);

    }
    public function update($Customer_id, $array)
    {
        $this->db->where('Customer_id', $Customer_id);
        return $this->db->update('Customer', $array);
    }
    public function delete($Customer_id)
    {
        $this->db->where('Customer_id',$Customer_id);
        return $this->db->delete('Customer');
    }
    public function get_by_company_id($Company_id)
    {
        $this->db->where('Company_id', $Company_id);
        $this->db->from('Customer');
        $query = $this->db->get();
        return $query->result_array();
    }

}