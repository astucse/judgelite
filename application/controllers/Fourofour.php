<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fourofour extends MY_Controller {
    public function index()
	{
        $this->load->view('essential/404');		
	}
}