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

        $data['company'] = $this->Company->gets();
        $data['data'] = array();
        foreach ($this->Customer->gets() as $row){
            $temp_array = array();
            $temp_array['customer'] = $row;
            $temp_array['company_by_customer'] = $this->Company->get_by_id($row['Company_id'])[0];
            array_push($data['data'], $temp_array); 
        }
        // print_r($data);
        // die();
        $this->template->view('admin/customer_view', $data);
    }
    public function add()
    {
        // print_r($_POST);
        // die();
        
        // เพิ่ม Customer
        $array['Company_id'] = $this->input->post('company');
        $array['Customer_tex'] = $this->input->post('tax');
        $array['Customer_name'] = $this->input->post('person');
        $array['User_Status_id'] = "2";
        $array['Customer_phone'] = $this->input->post('phone');
        $array['Customer_email'] = $this->input->post('email');
        $array['Customer_comment'] = $this->input->post('comment');

        $this->Customer->insert($array);
        redirect('Customer/index?status=success', 'refresh');


    }
    public function edit_form($customer_id)
    {   
        $data['company'] = $this->Company->gets();
        $data['customer'] = $this->Customer->get_by_id($customer_id)[0];
        $data['company_by_customer'] = $this->Company->get_by_id($data['customer']['Company_id'])[0];
        // print_r($data);
        $this->template->view('admin/customer_edit_form_view', $data);
    }
    public function edit($customer_id)
    {
        // print_r($_POST);
        $array['Customer_name'] = $this->input->post('person');
        $array['Customer_phone'] = $this->input->post('phone');
        $array['Customer_email'] = $this->input->post('email');
        $array['Customer_comment'] = $this->input->post('comment');
        $array['Customer_tex'] = $this->input->post('tax');
        $array['Company_id'] = $this->input->post('company');
        // print_r($array);
        $this->Customer->update($customer_id, $array);
        redirect('Customer/index?status=edit_success', 'refresh');

    }
    public function clear($customer_id)
    {
        $this->Customer->delete($customer_id);
        redirect('Customer/index?status=delete_success', 'refresh');
    }
}
