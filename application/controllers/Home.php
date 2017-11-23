<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	protected function middleware()
    {
		return array('user_auth');
    }

	public function __construct()
	{
			parent::__construct();
			$this->load->model('installer');
			$this->load->model('viewModel');
	}
	public function index()
	{
			$this->load->view('home', array('title'=>'home Page'));		
	}
	public function exception()
	{
			echo $this->load->view('index', array('title'=>'Welcome'), TRUE);		
			die();
	}
	
	
}





