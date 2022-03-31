<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    function login($username, $password){
        $query = $this->db->get_where('tgr_users', array('user_name'=>$username,'statut'=>'online'));
        if($query->num_rows()==1){
            $result=$query->result();
            foreach ($result as $item){
                if(password_verify($password,$item->password)){
                    return $query->result();
                }
                else{
                    return false;
                }
            }
        }else{
            return false;
        }
    }
}