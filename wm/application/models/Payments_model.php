<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Payments_model extends CI_Model
{
    public function getPayments()
    {
        //SELECT id, amount, datetime, name FROM payments INNER JOIN categories ON category = categories.cid WHERE uid = 
        $this->db->select('id,name,amount,datetime,category,notes');
        $this->db->from('payments');
        $this->db->join('categories', 'payments.category = categories.cid');
        $this->db->where('payments.uid', $_SESSION['user_id']);
        
        
        $query = $this->db->get() or die ("Error");
        
        return $query;
    }
    
    public function AddPayment()
    {
        $amount = $this->input->post('amount');
        $uid = $_SESSION['user_id'];
        $category = $this->input->post('category');
        $notes = $this->input->post('notes');
        
        $data = array(
            'uid' => $uid,
            'amount' => $amount,
            'category' => $category,
            'notes' => $notes
        );
        
        $this->db->insert('payments', $data) or die("Error in inserting payment.");       
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
    
    public function averagePayments()
    {
        $this->db->select_avg('amount');
        $this->db->from('payments');
        //$this->db->join('categories', 'payments.category = categories.cid');
        $this->db->where('payments.uid', $_SESSION['user_id']);
        $query = $this->db->get();
        return $query;
    }
    
    public function maxPayment()
    {
        $this->db->select('amount, name');
        $this->db->from('payments');
        $this->db->join('categories', 'payments.category = categories.cid');
        $this->db->where('payments.uid', $_SESSION['user_id']);
        $this->db->order_by('amount', 'desc');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query;
    }
    
    public function getPayment($id)
    {
        //SELECT id, amount, datetime, name FROM payments INNER JOIN categories ON category = categories.cid WHERE uid = 
        $this->db->select('id,name,amount,datetime,category,notes');
        $this->db->from('payments');
        $this->db->join('categories', 'payments.category = categories.cid');
        $this->db->where('payments.uid', $_SESSION['user_id']);
        $this->db->where('id', $id);
        
        
        $query = $this->db->get() or die ("Error");
        
        return $query;
    }
    
    
    public function updatePayment($pid)
    {
        //post
        $amount = $this->input->post('amount');
        $category = $this->input->post('category');
        $notes = $this->input->post('notes');
        
        $this->db->where('id', $pid);
        $this->db->update('payments', array(
            'amount' => $amount,
            'category' => $category,
            'notes' => $notes
        ));
    }
}