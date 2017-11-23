<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct(){
			parent::__construct();
			$this->load->model('userModel');
			$this->load->model('viewModel');
			$this->load->helper('html');
			$this->load->helper('url');
			
			//$this->load->model('user');
	}
	public function index()
	{
		if ($this->session->userdata('logged_in')){
			$assets;
			$this->load->view('home', array('title'=>'Home Page'));		
		}else{
			$assets;
			$this->load->view('register', array('title'=>'Register Page'));		
		}
    }
    public function signup(){
        if ($this->session->userdata('logged_in')){
			$this->load->view('home', array('title'=>'Home Page'));		
		}
		else{
	        $fullname = $this->input->post('fullname');
            $password = md5($this->input->post('password'));
            $email = $this->input->post('email');
            $id = $this->input->post('id');
            $gender = $this->input->post('gender');

			$session_data = array(
				'name'	=> $fullname,
				'email'	=> $email,
				'id'	=> $id,
				'logged_in' => TRUE
			);
            $query_result = $this->userModel->create($fullname,$password,$email,$id,$gender);
			
			if(sizeof($query_result)==0){
				$this->session->set_userdata($session_data, NULL, 100000000);
                $this->load->view('home', array('title'=>'yessss'));    
            }else{
                $this->load->view('register', array('title'=>'noooooo','error'=>$query_result));
            }
		}
	}
	public function login(){
		if ($this->session->userdata('logged_in')){
			$this->load->view('home', array('title'=>'Home Page'));		
		}else{
            $password = md5($this->input->post('password'));
			$id = $this->input->post('id');
			
			$query_result = $this->userModel->check($password,$id);
			if($query_result=="id"){
				$this->load->view('index', array('title'=>'ID Error'));
			}else if($query_result=="password"){
				$this->load->view('index', array('title'=>'Password Error'));
			}else{
				$this->session->set_userdata($query_result, NULL, 100000000);
                $this->load->view('home', array('title'=>'yessss'));    
			}
		}
	}
	public function logout(){
		session_destroy();
		$this->load->view('index', array('title'=>'After Logout'));   
	}

	
	
}





