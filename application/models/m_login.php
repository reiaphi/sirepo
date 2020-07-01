<?php

class m_login extends CI_Model{
    function login($username, $password){
        $check = $this->db->get_where('users', array('username' => $username, 'password'=>md5($password)));
    
    if($check->num_rows()>0){
        return 1;
    }else {
        return 0;
    }
    }
}