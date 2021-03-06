<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Userlogin extends CI_Model
{
    function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        $this->db->select('id, email, username, password, country, city, offersnumber, points');
        $this->db->from('users');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1)
        {
            $row = $query->row();
            $data = array(
                'user_id' => $row->id,
                'email' => $row->email,
                'username' => $row->username,
                'country' => $row->country,
                'city' => $row->city,
                'offersnumber' => $row->offersnumber,
                'points' => $row->points,
                'loggedin' => TRUE,
                'type' => "user"
            );
            $this->session->unset_userdata('loggedin');
            $this->session->set_userdata($data);
            return true;
        }
        else
        {
            return false;
        }
    }
    
    public function placeLogin()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        $this->db->select('id, name, email, password, address');
        $this->db->from('places');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1)
        {
            $row = $query->row();
            $data = array(
                'place_id' => $row->id,
                //'email' => $row->email,
                'name' => $row->name,
                'email' => $row->email,
                'address' => $row->address,
                //'city' => $row->city,
                //'offersnumber' => $row->offersnumber,
                //'points' => $row->points,
                'loggedin' => TRUE,
                'type' => "place"
            );
            $this->session->unset_userdata('loggedin');
            $this->session->set_userdata($data);
            return true;
        }
        else
        {
            return false;
        }
    }
}