<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Signup_model extends CI_Model
{
    public function signUpUser()
    {
        $username = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $country = $this->input->post('country');
        $city = $this->input->post('city');
        
        if (((empty($username)) || (empty($email)) || (empty($password)) || (empty($country)) || (empty($city))))
        {
            return false;
        }
        
        $data = array(
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'country' => $country,
            'city' => $city
        );
        $this->db->insert('users', $data);
        
        $data = array(
                'user_id' => $this->db->insert_id(),
                'email' => $email,
                'username' => $username,
                'country' => $country,
                'city' => $city,
                'offersnumber' => 0,
                'points' => 0,
                'loggedin' => TRUE,
                'type' => "user"
            );
        $this->session->unset_userdata('loggedin');
        $this->session->set_userdata($data);
        return true;
    }
    
    public function signUpPlace()
    {
        $username = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $address = $this->input->post('address');
        //$city = $this->input->post('city');
        
        if (((empty($username)) || (empty($email)) || (empty($password)) || (empty($address))))
        {
            return false;
        }
        
        $data = array(
            'name' => $username,
            'email' => $email,
            'password' => $password,
            'address' => $address,
        );
        $this->db->insert('places', $data);
        
        $data = array(
                'place_id' => $this->db->insert_id(),
                'email' => $email,
                'name' => $username,
                'address' => $address,
                'loggedin' => TRUE,
                'type' => "place"
            );
        $this->session->unset_userdata('loggedin');
        $this->session->set_userdata($data);
        return true;
    }
}