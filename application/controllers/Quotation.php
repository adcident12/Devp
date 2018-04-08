<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quotation extends CI_Controller {

	public function index()
    {
        $this->template->view('admin/quotation_view');
    }
}
