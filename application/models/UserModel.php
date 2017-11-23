<?php
defined('BASEPATH') or exit();

/*
*
* 
*/
class UserModel extends CI_Model
{
    /*
    * Get
    */
    public function create($fullname,$password,$email,$id,$gender)
    {

        $i = $this->db->get_where('user',['id'=>$id]);
        $e = $this->db->get_where('user',['email'=>$email]);
        if(count($i->result())==0){
            if(count($e->result())!=0)
                return ["email"];
            $this->db->set('name', $fullname)
            ->set('id', $id)
            ->set('email', $email)
            ->set('teams_id', 0)
            ->set('gender', $gender)
            ->set('password', $password)
            ->insert('user');
            return [];
        }else{
            if(count($e->result())!=0)
                return ["email","id"];
            else
                return ["id"];
        }
    }
    
    public function check($password,$id)
    {
        $i = $this->db->get_where('user',['id'=>$id]);
        $row = $i->row();
        if(count($i->result())==0){
            //show_error('1You are not allowed to perform this operation');
            return "id";
        }else{
            $p = $row->password;
            if($p!=$password){
                return "password";
            }else{
                return array(
                    'name'=> $row->name,
                    'email'=>$row->email,
                    'id'=>$row->id,
                    'logged_in' => TRUE
                );
            }
        }
    }
    
}