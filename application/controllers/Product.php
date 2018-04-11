<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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

        $data['product'] = $this->Product->gets();
        $this->template->view('admin/product_view', $data);
    }
    public function add()
    {
        // print_r($_POST);
        $array['Pro_name'] = $this->input->post('Pro_name');

        $this->Product->insert($array);
        redirect('Product/index?status=success', 'refresh');

    
    }
    public function edit_form($Pro_id)
    {   
        $data['product'] = $this->Product->get_by_id($Pro_id)[0];
        // print_r($data);
        $this->template->view('admin/product_edit_form_view',$data);
    }
    public function edit($Pro_id)
    {
        // print_r($_POST);
        $array['Pro_name'] = $this->input->post('Pro_name');
        // print_r($array);
        $this->Product->update($Pro_id, $array);
        redirect('Product/index?status=edit_success', 'refresh');

    }
    public function clear($Pro_id)
    {
        $this->Product->delete($Pro_id);

        redirect('Product/index?status=delete_success', 'refresh');
    }
}
