<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Category_model extends CI_Model
{
    public function getCats()
    {
        $this->db->select('cid, name, description');
        $this->db->from('categories');
        $this->db->where('uid', $_SESSION['user_id']);
        $query = $this->db->get() or die ("Error");
        
        return $query->result();
    }
    
    public function deleteCats($cid)
    {
        $this->db->where_in('cid', $cid);
        $this->db->delete('categories');       
    }
    
    public function createCat($name, $description)
    {
        $data = array(
            'name' => $name,
            'description' => $description,
            'uid' => $_SESSION['user_id']
        );
        
        $this->db->insert('categories', $data) or die ("Error");
    }
}