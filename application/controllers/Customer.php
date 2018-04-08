<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function index()
    {
        $this->template->view('admin/customer_view');
    }
}
