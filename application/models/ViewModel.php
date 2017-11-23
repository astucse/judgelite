<?php
defined('BASEPATH') or exit();

/*
*
* 
*/
class ViewModel extends CI_Model
{
    /*
    * Get
    */
    public function get_header($type) {
        if(!$type || $type == 'default') {
            $this->load->view('includes/default/header');
        }else if($type=='admin'){
            $this->load->view('includes/admin/header');
        }
    }
    public function get_navbar($type) {
        if(!$type || $type == 'default') {
            $this->load->view('includes/default/navbar');
        }else if($type=='admin'){
            $this->load->view('includes/admin/navbar');
        }
    }
    public function get_footer($type) {
        if(!$type || $type == 'default') {
            $this->load->view('includes/default/footer');
        }else if($type=='admin'){
            $this->load->view('includes/admin/footer');
        }
    }
}