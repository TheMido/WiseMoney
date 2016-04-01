<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Offers_model extends CI_Model
{
    public function addOffer($data)
    {
        $pid=$data[0]; $expires=$data[1]; $usagetimes=$data[2];$name=$data[3];$desc=$data[4];
        $data = array(
            'pid' => $pid,
            'expires' => $expires,
            'usagetimes' => $usagetimes,
            'name' => $name,
            'desc' => $desc
        );
        if (empty($expires) || (empty($usagetimes)) || (empty($name)))
        {
            return false;
        }
        $query = $this->db->insert('offers', $data);
        
        if ($query)
        {
           return true; 
        }
    else {
            return false;
        }
    }
    
    public function getOffers()
    {
        $this->db->select('id, pid, name, desc, expires, usagetimes');
        $this->db->from('offers');
        $this->db->where('pid', $this->session->place_id);
        $query = $this->db->get();
        return $query;
    }
    
    public function getAllOffers()
    {
        $this->db->select('offers.id, pid, offers.name, places.name, desc, expires, usagetimes');
        $this->db->from('offers');
        //$this->db->where('pid', $this->session->place_id);
        $this->db->join('places', 'pid = places.id');
        $query = $this->db->get();
        return $query;
    }
    
    public function deleteOffers($id)
    {
        if (empty($id))
        {
            return false;
        }
        $this->db->where_in('id', $id);
        $this->db->delete('offers');       
    }
}