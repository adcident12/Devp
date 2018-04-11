<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase_order_model extends CI_Model {
    
    public function gets()
    {
        $this->db->from('Purchase_Order');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_by_id($Purchase_Order_id)
    {
        $this->db->where('Purchase_Order_id', $Purchase_Order_id);
        $this->db->from('Purchase_Order');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function insert($array)
    {
        return $this->db->insert('Purchase_Order', $array);
    }
    public function customer_by_qoutation()
    {
        $this->db->select('*');
        $this->db->from('Customer');
        $this->db->join('Quotation', 'Quotation.Quotation_person = Customer.Customer_name');
        $query = $this->db->get();
        return $query->result_array();
    }

}