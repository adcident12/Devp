<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

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
        $data['insert'] = "insert";
        // print_r($data);
        
        $this->template->view('admin/company_view', $data);
    }
    public function add()
    {
        // print_r($_POST);
    
        // เพิ่ม Company
        $array['Company_name'] = $this->input->post('company');
        $array['Company_address'] = $this->input->post('address');
        $array['Company_telephone'] = $this->input->post('telephone');
        $array['Company_fax'] = $this->input->post('fax');
        $this->Company->insert($array);
        redirect('Company/index?status=success', 'refresh');
        // die();
    }
    public function edit_form($company_id)
    {
        $data['edit_company'] = $this->Company->get_by_id($company_id)[0];
        // print_r($data);
    
        $this->template->view('admin/company_edit_form_view',$data);
    }
    public function edit($company_id)
    {
        // print_r($_POST);
        // แก้ไข Company
        $array['Company_name'] = $this->input->post('company');
        $array['Company_address'] = $this->input->post('address');
        $array['Company_telephone'] = $this->input->post('telephone');
        $array['Company_fax'] = $this->input->post('fax');
        print_r($company_id);
        $this->Company->update($company_id, $array);
        redirect('Company/index?status=edit_success', 'refresh');
        // die();
        
        
    }
    public function clear($company_id)
    {
        $this->Company->delete($company_id);
        redirect('Company/index?status=delete_success', 'refresh');
    }
}
