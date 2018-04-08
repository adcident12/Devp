<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tex extends CI_Controller {

	public function index()
    {
        $this->template->view('admin/tex_view');
    }
}