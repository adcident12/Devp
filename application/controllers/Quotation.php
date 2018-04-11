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
        
        $data['customer'] = $this->Customer->gets();
        // $data['quotation'] = $this->Quotation->gets();
        $data['customer_in_quotation'] = $this->Quotation->customer_in_quotation();
        // print_r($data);
        $this->template->view('admin/quotation_view', $data);
    }
    public function add_quotation()
    {
        // print_r($_POST);
        // die();
        $array['Quo_volume'] = $this->input->post('Quo_volume');
        $array['Quo_number'] = $this->input->post('Quo_number');
        $array['Quo_date'] = $this->input->post('Quo_date');
        $array['Quo_payment'] = $this->input->post('Quo_payment');
        $array['Quo_delivery'] = $this->input->post('Quo_delivery');
        $array['check'] = $this->input->post('Cus_id');


        // print_r($array);
        // die();
        $this->Quotation->insert($array);
        
        redirect('Quotation/index?status=success', 'refresh');
    }
    public function edit_form_quotaion($Quo_id, $Cus_id)
    {
        $data['Quo_id'] = $Quo_id;
        $data['Cus_id'] = $Cus_id;
        $data['customer'] = $this->Customer->gets();
        // $data['quotation_by_id'] = $this->Quotation->get_by_id($data['Quo_id'])[0];
        $data['customer_in_quotation_by_id'] = $this->Quotation->customer_in_quotation_by_id($data['Quo_id'])[0];
        // print_r($data);

        $this->template->view('admin/quotation_edit_form_view', $data);
    }
    public function edit($Quo_id)
    {
        // print_r($_POST);
        // die();
        $array['Quo_volume'] = $this->input->post('Quo_volume');
        $array['Quo_number'] = $this->input->post('Quo_number');
        $array['Quo_date'] = $this->input->post('Quo_date');
        $array['Quo_payment'] = $this->input->post('Quo_payment');
        $array['Quo_delivery'] = $this->input->post('Quo_delivery');
        $array['check'] = $this->input->post('Cus_id');
        // print_r($array);
        // die();
        // die();
        $this->Quotation->update($Quo_id, $array);
        redirect('Quotation/index?status=edit_success', 'refresh');
    }
    public function clear($Quo_id, $Cus_id)//ไม่สามารถลบได้เนื่องจาก database ไม่รองรับ
    {
        // $this->Quotation->delete($Pro_id);
        die();
        redirect('Quotation/product/'.$Quo_id.'/'.$Cus_id.'/?status=delete_success', 'refresh');
    }
    public function product($Quo_id, $Cus_id ,$status = '')
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
        
        $data['Quo_id'] = $Quo_id;
        $data['Cus_id'] = $Cus_id;

        $data['product'] = $this->Product->gets();
        $data['Quotation_detail'] = @$this->Quotation->gets_Quotation_detail()[0];
        $data['get_Quotation_detail_in_product'] = @$this->Quotation->get_Quotation_detail_in_product($data['Quo_id']);
        // print_r($data);

        $this->template->view('admin/add_product_in_quotation_view', $data);
    }
    public function add_product()
    {
        
        $Quo_id = $this->input->post('Quo_id');
        $Cus_id = $this->input->post('Cus_id');

        $array['Quo_id'] = $this->input->post('Quo_id');
        $array['Cus_id'] = $this->input->post('Cus_id');;
        $array['Pro_id'] = $this->input->post('Pro_id');
        $array['Staff_id'] = "1";
        $Qd_price = $this->input->post('Qd_price');
        $Qd_qty = $this->input->post('Qd_qty');
        $array['Qd_price'] = $Qd_price;//ราคา
        $array['Qd_qty'] = $Qd_qty;//จำนวน
        $Qd_total = $Qd_price * $Qd_qty;
        $array['Qd_total'] = $Qd_total; //ราคารวม

        $Qd_vat = $this->input->post('Qd_vat');
        $array['Qd_vat'] = $Qd_vat; //vat(%)

        $tem = $Qd_total * ($Qd_vat/100);
        $Qd_total_vat = $Qd_total + $tem;
        $array['Qd_total_vat'] =  $Qd_total_vat; //ราคารวมvat
        $array['Qd_file'] = "";

        // print_r($array);
        // die();
        
        $this->Quotation->replace_Quotation_detail($array);

        redirect('Quotation/product/'.$Quo_id.'/'.$Cus_id.'/?status=success', 'refresh');


    }
    

}
