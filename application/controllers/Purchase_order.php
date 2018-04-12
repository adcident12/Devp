<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase_order extends CI_Controller {

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
        

        $data['PurchaseOder'] = $this->Purchase_order->gets(); 
        $this->template->view('admin/purchase_order_view', $data);
    }
    public function add_purchase_order()
    {
        // print_r($_POST);
        $array['PO_No'] = $this->input->post('PO_No');
        $array['PO_date'] = date('Y-m-d');
        $array['PO_delivery_date'] = $this->input->post('PO_delivery_date');
        $array['PO_file'] = "";
        

        // print_r($array);
        // die();

        $this->Purchase_order->insert($array);
        redirect('Purchase_order/index?status=success', 'refresh');

    }
    public function edit_from_purchase_order($PO_id)
    {
        $data['PurchaseOder'] = $this->Purchase_order->get_by_id($PO_id)[0];
        // print_r($data);
        // die();
        $this->template->view('admin/purchase_order_edit_form_view', $data);


    }
    public function edit_purchase_order($PO_id)
    {

        $array['PO_No'] = $this->input->post('PO_No');
        $array['PO_delivery_date'] = $this->input->post('PO_delivery_date');

        $this->Purchase_order->update($PO_id, $array);
        
        redirect('Purchase_order/index?status=edit_success', 'refresh');

    }
    public function add_from_product_in_purchase_order($PO_id, $status = '')
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
        
        $data['PO_id'] = $PO_id;
        $data['PO_NO'] = $this->Purchase_order->get_by_id($PO_id);
        $data['product_in_QD'] = $this->Purchase_order->get_PO_detail_in_product_by_id($PO_id);
        $data['QD_Q_P_C'] = $this->Purchase_order->Qoutation_in_Quotation_detail_in_Product_in_Customer();
        // print_r($data);

        $this->template->view('admin/add_product_in_purchase_view', $data);
    }
    public function add_product_in_purchase_order()
    {
        // print_r($_POST);
        // die();
        $PO_id = $this->input->post('PO_id');

        $array['Quo_id'] = $this->input->post('Quo_id');
        $array['Pro_id'] = $this->input->post('Pro_id');
        $array['PO_id'] = $this->input->post('PO_id');
        $array['Pd_qty'] = $this->input->post('Pd_qty');
        $array['Pd_price'] = $this->input->post('Pd_price');
        // print_r($array);
        //die();

        $this->Purchase_order->replace_PO_detail($array);
        redirect('Purchase_order/add_from_product_in_purchase_order/'.$PO_id.'/?status=success', 'refresh');

    }
    public function clear($Pd_id, $PO_id)
    {
        // print_r($Pd_id);
        // print_r($PO_id);
        // die();
        $this->Purchase_order->delete($Pd_id);
        redirect('Purchase_order/add_from_product_in_purchase_order/'.$PO_id.'/?status=delete_success', 'refresh');
    }
    
}
