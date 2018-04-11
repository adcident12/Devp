<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quotation_model extends CI_Model {

	public function gets()
    {
        $this->db->from('Quotation');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_by_id($Quotation_id)
    {
        $this->db->where('Quotation_id', $Quotation_id);
        $this->db->from('Quotation');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function company_by_customer()
    {
        $this->db->select('*');
        $this->db->from('Company');
        $this->db->join('Customer', 'Customer.Company_id = Company.Company_id');
        // $this->db->join('Quotation', 'Quotation.Quotation_person = Customer.Customer_name');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function insert($array)
    {
        return $this->db->insert('Quotation',$array);
    }
    public function update($Quotation_id, $array)
    {
        $this->db->where('Quotation_id', $Quotation_id);
        return $this->db->update('Quotation' ,$array);
    }
    public function delete($Quotation_id)
    {
        $this->db->where('Quotation_id', $Quotation_id);
        return $this->db->delete('Quotation');
    }
    
}
