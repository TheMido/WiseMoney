<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Analytics_model extends CI_Model
{
    public function getRange($from, $to)
    {
        $this->db->select('id,name,amount,datetime,category,notes');
        $this->db->from('payments');
        $this->db->join('categories', 'payments.category = categories.cid');
        $this->db->where('payments.uid', $_SESSION['user_id']);
        $this->db->where('date(datetime) >= ', $from);
        $this->db->where('date(datetime) <= ', $to);
        
        $query = $this->db->get() or die ("Fatal error");
        return $query->result();
    }
    
    public function rowCount()
    {
        $this->db->select('id,name,amount,datetime,category,notes');
        $this->db->from('payments');
        $this->db->join('categories', 'payments.category = categories.cid');
        $this->db->where('payments.uid', $_SESSION['user_id']);
        
        $query = $this->db->get();
        return $query->num_rows();
    }
}
