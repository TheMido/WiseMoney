<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Analytics extends CI_Controller
{
    public function index()
    {
        $this->load->model('analytics_model');
        $this->load->model('payments_model');
        $data['average'] = $this->payments_model->averagePayments()->result_array();
        $data['maxpayment'] = $this->payments_model->maxPayment()->result_array();
         $num_rows = $this->payments_model->rowCount();
        $data['num_of_payments'] = $num_rows;
        
        if (!empty($this->input->get('filter')))
        {
            $from = $this->input->get('from');
            $to = $this->input->get('to');
            
            $data['payments'] = $this->analytics_model->getRange($from, $to);
            $this->load->view('payments', $data);
        }
        else
        { // globals            
            $data['payments'] = $this->payments_model->getPayments()->result();            
            $this->load->view('analytics', $data); 
        }
    }
}
?>

