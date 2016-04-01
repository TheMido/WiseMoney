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
        //$this->db->select_sum('amount');
        $this->db->from('categories');
        //$this->db->join('payments', 'payments.category = cid');
        $this->db->where('categories.uid', $_SESSION['user_id']);
        //$this->db->group_by('name');
        $query = $this->db->get() or die ("Error");
        
        return $query->result();
    }
    
    public function deleteCats($cid)
    {
        $this->db->where_in('category', $cid);
        $this->db->delete('payments');
        
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
        
        if (!is_string($data['name']) || !is_string($data['description']))
        {
            return false;
        }
        
        $this->db->insert('categories', $data) or die ("Error");
    }
    
    public function getAllCats()
    {
        $this->db->select('cid, name, description, sum(amount) as amount');
        //$this->db->select_sum('amount');
        $this->db->from('categories');
        $this->db->join('payments', 'payments.category = cid', 'left');
        $this->db->where('categories.uid', $_SESSION['user_id']);
        $this->db->group_by('name');
        $query = $this->db->get() or die ("Error");
        
        return $query->result();
    }
}