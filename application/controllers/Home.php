<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index($status = '')
	{
        if($status == '') {
            $status = $this->input->get('status');
        }
        if( $status == 'success'){
            $data['status']['color'] = 'success';            
            $data['status']['text'] = 'สมัครสำเร็จ';
        }
        else if($status == 'error_input_username'){
            $data['status']['color'] = 'warning';            
            $data['status']['text'] = 'กรุณากรอกผู้ใช้และรหัส';

        }
        else if($status == 'error_input_password'){
            $data['status']['color'] = 'warning';            
            $data['status']['text'] = 'กรุณากรอกผู้ใช้หรือรหัส';

        }
        else if($status == 'error_input'){
            $data['status']['color'] = 'warning';            
            $data['status']['text'] = 'ผู้ใช้และรหัสผิด';

        }
        else {
            $data['status'] = '';
        }

	    $this->load->view('/login_view', $data);
    }
    public function CRUD()
	{
		$this->template->view('admin/home_view');
    }
    public function login()
    {
        $username = $this->input->post('user_name');
        $password = $this->input->post('password');
        $data['check_user'] = $this->User->gets()[0];

        if($username == "" && $password == ""){
            redirect('Home/index?status=error_input_username', 'refresh');
        }else if($username=="" || $password==""){
            redirect('Home/index?status=error_input_password', 'refresh');
        }else{
            $data['user'] = $this->User->get_by_name($username)[0];

            $data['user_status'] = $this->User_Status->get_by_id($data['user']['User_Status_id'])[0];
            if($data['user']['User_name'] == $username && $data['user']['User_password'] == $password){
                $this->session->set_userdata('User_Status', $data['user_status']['User_Status_name']);
                $this->session->set_userdata('User_name', $data['user']['User_name']);
                redirect('/Home/CRUD/', 'refresh');
            }else{
                redirect('Home/index?status=error_input', 'refresh');
            }
            
        }
    }
    public function logout()
    {   $this->session->sess_destroy();
        redirect('Home/', 'refresh');
    }
}
