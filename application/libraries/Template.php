<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template {

    function view($file, $data = array())
    {
        $CI =& get_instance();

        $data['user_name'] = $CI->session->userdata('User_name');

        $CI->load->view('template/header.php', $data);
        
        if($CI->session->userdata('User_Status') == 'Admin'){
            $CI->load->view('menu/menu_admin.php', $data);
        }else if($CI->session->userdata('User_Status') == 'User'){
            $CI->load->view('menu/menu_user.php', $data);
        }
        
        $CI->load->view($file, $data);
        
        $CI->load->view('template/footer.php', $data);
    }

}