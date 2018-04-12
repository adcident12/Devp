<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase_order_model extends CI_Model {
    
    public function gets()
    {
        $this->db->from('PurchaseOder');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_by_id($PO_id)
    {
        $this->db->where('PO_id', $PO_id);
        $this->db->from('PurchaseOder');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function insert($array)
    {
        return $this->db->insert('PurchaseOder', $array);
    }
    public function customer_by_qoutation()
    {
        $this->db->select('*');
        $this->db->from('Customer');
        $this->db->join('Quotation', 'Quotation.Quotation_person = Customer.Customer_name');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function update($PO_id, $array)
    {
        $this->db->where('PO_id', $PO_id);
        return $this->db->update('PurchaseOder', $array);
    }
    public function Qoutation_in_Quotation_detail_in_Product_in_Customer()
    {
        $this->db->select('*');
        $this->db->from('Quotation_detail');
        $this->db->join('Quotation', 'Quotation_detail.Quo_id = Quotation.Quo_id');
        $this->db->join('Product', 'Quotation_detail.Pro_id = Product.Pro_id');
        $this->db->join('Customer', 'Quotation_detail.Cus_id = Customer.Cus_id');
        $query = $this->db->get();
        return $query->result_array();

    }
    public function replace_PO_detail($array)
    {
        return $this->db->replace('PO_detail', $array);

    }
    public function get_PO_detail_in_product_by_id($PO_id)
    {
        $this->db->select('*');
        $this->db->where('PO_id', $PO_id);
        $this->db->from('PO_detail');
        $this->db->join('Product','PO_detail.$PO_id = Product.Pro_id');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function delete($Pd_id)
    {
        $this->db->where('Pd_id', $Pd_id);
        return $this->db->delete('PO_detail');
    }

}