<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template {

    function view($file, $data = array())
    {
        $CI =& get_instance();

        $data['Staff_name'] = $CI->session->userdata('Staff_name');

        $CI->load->view('template/header.php', $data);
        
        if($CI->session->userdata('Staff_Status') == 'Admin'){
            $CI->load->view('menu/menu_admin.php', $data);
        }else if($CI->session->userdata('Staff_Status') == 'User'){
            $CI->load->view('menu/menu_user.php', $data);
        }
        
        $CI->load->view($file, $data);
        
        $CI->load->view('template/footer.php', $data);
    }

}