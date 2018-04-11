<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

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
        $this->template->view('admin/customer_view', $data);
    }
    public function add()
    {
        // print_r($_POST);
    
        // เพิ่ม Company
        $array['Cus_CopName'] = $this->input->post('company');
        $array['Cus_address'] = $this->input->post('address');
        $array['Cus_tel'] = $this->input->post('telephone');
        $array['Cus_fax'] = $this->input->post('fax');
        $array['Cus_email'] = $this->input->post('email');
        $array['Cus_tax'] = $this->input->post('tax');
        $array['Cus_dealName'] = $this->input->post('name');
        $array['Cus_dealLlastName'] = $this->input->post('last_name');
        $array['Cus_dealTel'] = $this->input->post('phone');

        $this->Customer->insert($array);
        redirect('Customer/index?status=success', 'refresh');
        // die();
    }
    public function edit_form($Cus_id)
    {
        $data['edit_customer'] = $this->Customer->get_by_id($Cus_id)[0];
        // print_r($data);
    
        $this->template->view('admin/customer_edit_form_view',$data);
    }
    public function edit($Cus_id)
    {
        // print_r($_POST);
        // แก้ไข Company
        $array['Cus_CopName'] = $this->input->post('company');
        $array['Cus_address'] = $this->input->post('address');
        $array['Cus_tel'] = $this->input->post('telephone');
        $array['Cus_fax'] = $this->input->post('fax');
        $array['Cus_email'] = $this->input->post('email');
        $array['Cus_tax'] = $this->input->post('tax');
        $array['Cus_dealName'] = $this->input->post('name');
        $array['Cus_dealLlastName'] = $this->input->post('last_name');
        $array['Cus_dealTel'] = $this->input->post('phone');
        
        $this->Customer->update($Cus_id, $array);
        redirect('Customer/index?status=edit_success', 'refresh');
        // die();
        
        
    }
    public function clear($Cus_id)
    {
        $this->Customer->delete($Cus_id);
        redirect('Customer/index?status=delete_success', 'refresh');
    }
}
