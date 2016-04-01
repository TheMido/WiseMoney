<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Payments extends CI_Controller
{
    public function index()
    {
        if (!isset($_SESSION['loggedin']) || ($_SESSION['loggedin'] != 1))
        {
            redirect('login');
        }
        
        
        $config['base_url'] = base_url().'Payments/index';
        $this->load->model('payments_model');
        
        $num_rows = $this->payments_model->rowCount();
        $config['total_rows'] = $num_rows;
        
        $config['per_page'] = 4;
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->db->limit($config['per_page'], $page);
        $data['payments'] = $this->payments_model->getPayments()->result();
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();
        $data['num_of_payments'] = $num_rows;
        $avg = $this->payments_model->averagePayments()->result_array();

        $data['maxpayment'] = $this->payments_model->maxPayment()->result_array();
        
        
        $data['average'] = $avg;
        $this->load->view('payments', $data);
    }
    
    public function Add()
    {
        if (!isset($_SESSION['loggedin']) && ($_SESSION['loggedin'] != 1))
        {
            redirect('login');
        }
        
        
        $this->load->model('category_model');
        $data['categories'] = $this->category_model->getCats();
        $this->load->view('addpayment', $data);
        
        $this->load->model('payments_model');
        $this->payments_model->AddPayment();
    }
    
    
    public function edit()
    {
        if (!isset($_SESSION['loggedin']) && ($_SESSION['loggedin'] != 1))
        {
            redirect('login');
        }
        
        
        $this->load->model('category_model');
        
        
        $this->load->model('payments_model');
        $cats = $this->category_model->getCats();
        
        if (!empty($this->input->post('updatepayment')))
        {
            $this->payments_model->updatePayment($this->input->get('id'));
        }
        
        if (!empty($this->input->get('id')))
        {
            $id = $this->input->get('id');
            $payment = $this->payments_model->getPayment($id)->result_array()[0];
            $data['payment'] = $payment;            
            $data['categories'] = $cats;           
        }
        
        $this->load->view('editpayment', $data);
    }
}