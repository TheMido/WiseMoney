<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Profile_model extends CI_Model
{
    public function updateProfile($email, $password, $country, $city)
    {
        
        $this->db->where('id', $_SESSION['user_id']);
        $this->db->update('users', array(
            'email' => $email,
            'password' => $password,
            'country' => $country,
            'city' => $city
        )) or die ("Error");
        
    }
    
    public function getInfo()
    {
        $this->db->select('username, password, email, country, city, offersnumber, points');
        $this->db->from('users');
        $this->db->where('id', $_SESSION['user_id']);
        
        $query=$this->db->get();
        return $query;
    }
}
