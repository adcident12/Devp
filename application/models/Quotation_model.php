<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quotation_model extends CI_Model {

	public function gets()
    {
        $this->db->from('Quotation');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_by_id($Quo_id)
    {
        $this->db->where('Quo_id', $Quo_id);
        $this->db->from('Quotation');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insert($array)
    {
        return $this->db->insert('Quotation',$array);
    }
    public function update($Quo_id, $array)
    {
        $this->db->where('Quo_id', $Quo_id);
        return $this->db->update('Quotation' ,$array);
    }
    public function delete($Pro_id)
    {
        $this->db->where('Pro_id', $Pro_id);
        return $this->db->delete('Quotation_detail');
    }
    public function customer_in_quotation()
    {
        $this->db->select('*');
        $this->db->from('Customer');
        $this->db->join('Quotation', 'Customer.Cus_id = Quotation.check');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function customer_in_quotation_by_id($Quo_id)
    {
        $this->db->select('*');
        $this->db->where('Quo_id', $Quo_id);
        $this->db->from('Customer');
        $this->db->join('Quotation', 'Customer.Cus_id = Quotation.check');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function replace_Quotation_detail($array)
    {
        return $this->db->replace('Quotation_detail', $array);
    }
    public function gets_Quotation_detail()
    {
        $this->db->from('Quotation_detail');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_Quotation_detail_in_product($Quo_id)
    {
        $this->db->select('*');
        $this->db->where('Quo_id', $Quo_id);
        $this->db->from('Product');
        $this->db->join('Quotation_detail', 'Product.Pro_id = Quotation_detail.Pro_id');
        $query = $this->db->get();
        return $query->result_array();
    }
    
}
