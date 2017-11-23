<?php
defined('BASEPATH') or exit();

/*
*
* 
*/
class Installer extends CI_Model
{
    /*
    * Get
    */
    public function firstTime() {
        return !$this->db->table_exists('installer');
    }
    public function install() {
        //$this->load->dbforge();
        //$this->dbforge->create_database('my_db');
        $q = 'CREATE TABLE Persons (
            PersonID int,
            LastName varchar(255),
            FirstName varchar(255),
            Address varchar(255),
            City varchar(255) 
        );';
        $this->db->query($q);       
    }
}