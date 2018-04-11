<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quotation extends CI_Controller {

	public function index($status = '')
    {

        if($status == '') {
            $status = $this->input->get('status');
        }
        if( $status == 'success'){
            $data['status']['color'] = 'success';            
            $data['status']['text'] = 'เพิ่มสำเร็จ';
        }
        else if($status == 'error_input'){
            $data['status']['color'] = 'warning';            
            $data['status']['text'] = 'เพิ่มไม่สำเร็จ';

        }
        else if($status == 'delete_success'){
            $data['status']['color'] = 'danger';            
            $data['status']['text'] = 'ลบสำเร็จ';

        }
        else if($status == 'edit_success'){
            $data['status']['color'] = 'success';            
            $data['status']['text'] = 'แก้ไขสำเร็จ';

        }
        else if($status == 'edit_error'){
            $data['status']['color'] = 'warning';            
            $data['status']['text'] = 'แก้ไขไม่สำเร็จ';

        }
        
        else {
            $data['status'] = '';
        }
        

        $data['company_by_customer'] = $this->Quotation->company_by_customer();
        $data['qoutation'] = $this->Quotation->gets(); 
        $this->template->view('admin/quotation_view', $data);
    }
    public function add_quotation()
    {
        // print_r($_POST);
        $array['Qoutation_num'] = $this->input->post('quotation');
        $array['Quotation_company'] = $this->input->post('company');
        $array['Quotation_person'] = $this->input->post('person');
        $array['Quotation_date'] = $this->input->post('date');
        // print_r($array);
        $this->Quotation->insert($array);
        
        redirect('Quotation/index?status=success', 'refresh');
    }
    public function edit_form_quotaion($Quotation_id)
    {
        $data['company_by_customer'] = $this->Quotation->company_by_customer();
        $data['qoutation_by_id'] = $this->Quotation->get_by_id($Quotation_id)[0];
        $this->template->view('admin/quotation_edit_form_view', $data);
    }
    public function edit($Quotation_id)
    {
        // print_r($_POST);
        $array['Qoutation_num'] = $this->input->post('quotation');
        $array['Quotation_company'] = $this->input->post('company');
        $array['Quotation_person'] = $this->input->post('person');
        $array['Quotation_date'] = $this->input->post('date');
        // print_r($array);
        $this->Quotation->update($Quotation_id, $array);
        redirect('Quotation/index?status=edit_success', 'refresh');
    }
    public function clear($Quotation_id)
    {
        $this->Quotation->delete($Quotation_id);
        
        redirect('Quotation/index?status=delete_success', 'refresh');
    }
    public function product($Quotation_id, $status = '')
    {
        if($status == '') {
            $status = $this->input->get('status');
        }
        if( $status == 'success'){
            $data['status']['color'] = 'success';            
            $data['status']['text'] = 'เพิ่มสำเร็จ';
        }
        else if($status == 'error_input'){
            $data['status']['color'] = 'warning';            
            $data['status']['text'] = 'เพิ่มไม่สำเร็จ';

        }
        else if($status == 'delete_success'){
            $data['status']['color'] = 'danger';            
            $data['status']['text'] = 'ลบสำเร็จ';

        }
        else if($status == 'edit_success'){
            $data['status']['color'] = 'success';            
            $data['status']['text'] = 'แก้ไขสำเร็จ';

        }
        else if($status == 'edit_error'){
            $data['status']['color'] = 'warning';            
            $data['status']['text'] = 'แก้ไขไม่สำเร็จ';

        }
        
        else {
            $data['status'] = '';
        }

        $data['product_in_quotation'] = @$this->Quotation->get_by_id($Quotation_id)[0];
        // print_r($data);
        // die();
        $this->template->view('admin/add_product_in_quotation_view', $data);
    }
    public function add_product($Quotation_id)
    {
        // print_r($Quotation_id);
        // print_r($_POST);
        $array['Quotation_product'] = $this->input->post('product');
        $array['Quotation_volume'] = $this->input->post('volume');
        $price= $this->input->post('price');

        $array['Quotation_price'] = $array['Quotation_volume'] * $price ;

        // print_r($array);

        $this->Quotation->update($Quotation_id, $array);

        redirect('Quotation/product/'.$Quotation_id.'/?status=success', 'refresh');


    }
}
