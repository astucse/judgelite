<?php
// src: application/middlewares/AdminAuthMiddleware.php

// Extends nothing, it's upto you what you want to extend. Completely generic.
class UserAuthMiddleware {
    protected $controller;
    protected $ci;
    
    public $roles = array();
    
    
    public function __construct($controller, $ci)
    {
        $this->controller = $controller;
        $this->ci = $ci;
    }
    
    public function run(){
        $logged_in = $this->ci->session->userdata('logged_in');
        if(!$logged_in){
            $this->controller->exception();
        }
    }

}




