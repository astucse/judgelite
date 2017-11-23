<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
			parent::__construct();
			$this->load->model('installer');
			//$this->load->model('user');
	}
	public function index()
	{
		
		if($this->installer->firstTime()==true){
			//$this->installer->install();
			$this->load->view('welcome_message');	
		}else{
			$this->load->view('welcome_message2');
		}
		
	}
	
}
