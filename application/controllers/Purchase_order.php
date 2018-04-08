<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase_order extends CI_Controller {

	public function index()
    {
        $this->template->view('admin/purchase_order_view');
    }
}
