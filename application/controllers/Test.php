<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	private $active = "color:white; background-color:blue;";
	public function __construct(){
			parent::__construct();
			$this->load->model('installer');
			$this->load->model('viewModel');
			$this->load->helper('html');
			$this->load->helper('url');
			
			//$this->load->model('user');
	}
	public function index()
	{
		$assets;
		$this->load->view('test', array('title'=>'home Page','MenuTest'=>$this->active));	
	}
	
	
}





