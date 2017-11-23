<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Season extends MY_Controller {
    private $active = "color:white; background-color:blue;";
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
		$this->load->view('season', array('title'=>'Season Page','MenuSeason'=>$this->active));		
    }
    


    public function exception()
	{
			echo $this->load->view('index', array('title'=>'Welcome'), TRUE);		
			die();
	}
}